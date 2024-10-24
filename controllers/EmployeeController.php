<?php
include __DIR__ . '../../db.php';
class EmployeeController
{
    public function fetchEmployees()
    {
        global $pdo; 


        $tables = ['employees_1', 'employees_2', 'employees_3'];
        $queryParts = [];
        $params = [];
        $limit = 10; 
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit; 

        foreach ($tables as $table) {
            $subQuery = "SELECT id, name, department, job_title, email, hire_date, salary, location, status, performance_rating FROM $table WHERE 1=1";

            if (!empty($_GET['department'])) {
                $subQuery .= " AND department IN (" . str_repeat('?,', count($_GET['department']) - 1) . "?)";
                $params = array_merge($params, $_GET['department']);
            }

            if (!empty($_GET['job_title'])) {
                $subQuery .= " AND job_title IN (" . str_repeat('?,', count($_GET['job_title']) - 1) . "?)";
                $params = array_merge($params, $_GET['job_title']);
            }

            if (!empty($_GET['status'])) {
                $subQuery .= " AND status = ?";
                $params[] = $_GET['status'];
            }

            if (!empty($_GET['hire_date_from']) && !empty($_GET['hire_date_to'])) {
                $subQuery .= " AND hire_date BETWEEN ? AND ?";
                $params[] = $_GET['hire_date_from'];
                $params[] = $_GET['hire_date_to'];
            }

            $queryParts[] = "($subQuery)";
        }

        $finalQuery = implode(' UNION ALL ', $queryParts);
        $finalQuery .= " LIMIT :limit OFFSET :offset"; 
        $stmt = $pdo->prepare($finalQuery);

        // Bind parameters
        foreach ($params as $key => $param) {
            $stmt->bindValue($key + 1, $param);
        }

        // Bind limit and offset
        $stmt->bindValue(count($params) + 1, $limit, PDO::PARAM_INT);
        $stmt->bindValue(count($params) + 2, $offset, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Total records for pagination
        $totalQuery = "SELECT COUNT(*) as total FROM ($finalQuery) as total_table";
        $totalStmt = $pdo->prepare($totalQuery);
        $totalStmt->execute();
        $totalRecords = $totalStmt->fetchColumn();

        // Prepare pagination links
        $totalPages = ceil($totalRecords / $limit);
        $links = [
            'current_page' => $page,
            'total_pages' => $totalPages,
            'has_more' => $page < $totalPages,
        ];

        // Return response as JSON
        header('Content-Type: application/json');
        echo json_encode([
            'data' => $employees,
            'links' => $links,
        ]);
    }
}

// Check if it's an AJAX request and call the fetchEmployees method
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'fetch') {
    $employeeController = new EmployeeController();
    $employeeController->fetchEmployees();
}