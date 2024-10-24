<?php
// Database connection
$pdo = new PDO("mysql:host=localhost;dbname=your_db_name", "username", "password");

// Function to insert employee data into a specific table
function insertEmployee($pdo, $table, $name, $department, $job_title, $email, $hire_date, $salary, $location, $status, $performance_rating) {
    $stmt = $pdo->prepare("INSERT INTO $table (name, department, job_title, email, hire_date, salary, location, status, performance_rating) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $department, $job_title, $email, $hire_date, $salary, $location, $status, $performance_rating]);
}

// Random data generation and insertion loop
$departments = ["HR", "IT", "Sales", "Marketing"];
$job_titles = ["Manager", "Developer", "Analyst", "Sales Rep"];
$locations = ["New York", "San Francisco", "Remote"];
$tables = ['employees_1', 'employees_2', 'employees_3'];

for ($i = 1; $i <= 100000; $i++) {
    $name = "Employee" . $i;
    $department = $departments[array_rand($departments)];
    $job_title = $job_titles[array_rand($job_titles)];
    $email = "employee{$i}@example.com";
    $hire_date = date('Y-m-d', strtotime("-".rand(0,3650)." days"));
    $salary = rand(50000, 150000);
    $location = $locations[array_rand($locations)];
    $status = (rand(0, 1) == 1) ? 'active' : 'inactive';
    $performance_rating = rand(1, 5);

    // Round-robin approach: Assign to one of the three tables
    $table = $tables[$i % 3]; // This will cycle through employees_1, employees_2, employees_3

    // Call function to insert data into the chosen table
    insertEmployee($pdo, $table, $name, $department, $job_title, $email, $hire_date, $salary, $location, $status, $performance_rating);
}

echo "Data insertion complete!";
?>