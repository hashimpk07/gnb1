<?php
// Start a session if needed
session_start();

// Include necessary files
require_once 'config/Database.php';
require_once 'models/Employee.php';

// Create a new database connection
$database = new Database();
$db = $database->getConnection();

// Check if there's an AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'controllers/EmployeeController.php';
    exit; // End script after handling AJAX
}

// If it's a normal request, show the employee view
require_once 'views/employee_view.php'; 