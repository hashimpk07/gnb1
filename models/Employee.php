<?php
// models/Employee.php
class Employee {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getEmployees($filters, $page, $perPage) {
        $whereClause = [];
        $params = [];

        if (!empty($filters['department'])) {
            $whereClause[] = "department IN (" . implode(',', array_fill(0, count($filters['department']), '?')) . ")";
            $params = array_merge($params, $filters['department']);
        }

        // Add other filters here...

        $whereSQL = !empty($whereClause) ? 'WHERE ' . implode(' AND ', $whereClause) : '';

        $start = ($page - 1) * $perPage;
        $query = "SELECT * FROM (
                    SELECT * FROM employees_1 
                    UNION SELECT * FROM employees_2
                    UNION SELECT * FROM employees_3
                  ) AS employees_combined 
                  $whereSQL
                  LIMIT $start, $perPage";

        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
