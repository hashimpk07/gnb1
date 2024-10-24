<!DOCTYPE html>
<html>
    <head>
        <title> GNB-TECH Test</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
      
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
            body{
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #f5f8fa;
            }
            .navbar-laravel{
                box-shadow: 0 2px 4px rgba(0,0,0,.04);
            }
            .navbar-brand , .nav-link, .my-form, .login-form{
                font-family: Raleway, sans-serif;

            }
            .my-form{
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }
            .my-form .row{
                margin-left: 0;
                margin-right: 0;
            }
            .login-form{
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }
            .login-form .row{
                margin-left: 0;
                margin-right: 0;
            }

            .menu_ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }
            .menu_li {
                float: left;
            }
            .menu_li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            .menu_li a:hover:not(.active) {
                background-color: #111;
            }
            .active {
                background-color: #04AA6D;
            }
            .error{
                color: red;
                margin-top: 4px;
            }
            .card {
                margin-top: 30px !important;
            } 
            .modal-title {
                font-size: 1.5rem;
                font-weight: 600;
                color: #4a4a4a;
            }
            .employee-details p {
                font-size: 1.1rem;
                color: #333;
                line-height: 1.5;
                padding: 8px 0;
                border-bottom: 1px solid #f1f1f1;
            }
            .employee-details p strong {
                font-weight: 600;
                color: #555;
            }
            .modal-body {
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 8px;
            }
            .modal-header {
                background-color: #007bff;
                color: white;
                border-bottom: 2px solid #0056b3;
            }
            .modal-header .close {
                color: white;
                opacity: 0.8;
            }
            .modal-header .close:hover {
                opacity: 1;
            }
            .modal-footer {
                border-top: none;
                justify-content: center;
            }
            .modal-footer .btn {
                padding: 8px 20px;
                font-size: 1rem;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
            }
            .modal-footer .btn:hover {
                background-color: #0056b3;
            }
            .employee-details .row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 0;
            }
            .employee-details .row .label {
                padding-right: 4rem;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container">
            <a class="navbar-brand"  href="https://gnbproperty.com/" style="color:#000;text-align: center; margin-left:10%;font-weight: bold;"> GNB-TECH SOFTWARE SOLUTIONS PVT LTD  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
             
            </div>
        </nav>

        <div class="container">
            <section class="content" style="margin-top: 20px;">
                <div class="container-fluid">
                    <div class="row">
                       
                       
                    <div class="col-md-12">
                      
                        <div class="card card-primary">
                            
                        <div class="container mt-2" >
  <!--  <button class="btn btn-danger btn-sm edit-btn" style="float:right"; onclick="window.location='{{ URL::route('excel.export'); }}'" > Excel Export </button>-->
    <h5 class="mt-2" style=" border-bottom-style: dotted;; display: block; width: 100%;margin-bottom:20px ">Employee Data</h5>
    
        <!-- Filters -->
        <div class="row mb-4 mt-2" style=" border-bottom: double;">
            <div class="col-md-2">
                <label>Department</label>
                <select id="department" class="form-control"  class="selectpicker" multiple data-live-search="true" >
                    <option value="HR">HR</option>
                    <option value="IT">IT</option>
                    <option value="Sales">Sales</option>
                    <option value="Marketing">Marketing</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Job Title</label>
                <select id="job_title" class="form-control" class="selectpicker" multiple data-live-search="true">
                    <option value="Manager">Manager</option>
                    <option value="Developer">Developer</option>
                    <option value="Analyst">Analyst</option>
                </select>
            </div>
            <div class="col-md-2">
                <label>Status</label>
                <select id="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="col-md-3" style="margin-bottom: 20px;">
                <label>From</label>
                <input type="date" id="hire_date_from" class="form-control ">
               
            </div>
            <div class="col-md-3" >
                <label>To</label>
                <input type="date" id="hire_date_to" class="form-control">
            </div>
        </div>

        <!-- Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>Hire Date</th>
                    <th>Salary</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="employee-table-body">
                <!-- Employee rows will be loaded here via AJAX -->
            </tbody>
        </table>

        <!-- Pagination -->
        <div id="pagination-links">
            <!-- Pagination links will be loaded here -->
        </div>

        <div class="modal fade" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="employeeModalLabel">Employee Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p ><strong>Name:</strong> <span id="view_name"></span></p>
                        <p><strong>Department:</strong> <span id="view_department"></span></p>
                        <p><strong>Job Title:</strong> <span id="view_job_title"></span></p>
                        <p><strong>Email:</strong> <span id="view_email"></span></p>
                        <p><strong>Hire Date:</strong> <span id="view_hire_date"></span></p>
                        <p><strong>Salary:</strong> <span id="view_salary"></span></p>
                        <p><strong>Location:</strong> <span id="view_location"></span></p>
                        <p><strong>Status:</strong> <span id="view_status"></span></p>
                        <p><strong>Performance Rating:</strong> <span id="view_performance_rating"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

                        </div>
                    </div>   
                    </div>
                </div>
            </section>    
        </div> 
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script>
        $(document).ready(function() {
            $('#department').selectpicker();
            $('#job_title').selectpicker();  
        });
        var fetchEmployeesUrl = "{{ c}}";
        function fetchEmployees(page = 1) {
            const department = $('#department').val();
            const job_title = $('#job_title').val();
            const status = $('#status').val();
            const hire_date_from = $('#hire_date_from').val();
            const hire_date_to = $('#hire_date_to').val();

            $.ajax({
                url: 'http://localhost/projects/gnb/controllers/EmployeeController.php',
                method: 'GET',
                data: {
                    department,
                    job_title,
                    status,
                    hire_date_from,
                    hire_date_to,
                    page
                },
                success: function(data) {
                    
                    let rows = '';
                    data.data.forEach(employee => {
                        rows += `
                            <tr>
                                <td>${employee.name}</td>
                                <td>${employee.department}</td>
                                <td>${employee.email}</td>
                                <td>${employee.hire_date}</td>
                                <td>${employee.salary}</td>
                                <td>${employee.status}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm view-btn" data-id="${employee.id}">View</button>
                                </td>
                            </tr>
                        `;
                    });
                    $('#employee-table-body').html(rows);
                    $('#pagination-links').html(data.links);
                }
            });
        }
        fetchEmployees();
        $('#department, #job_title, #status, #hire_date_from, #hire_date_to').on('change', function() {
            fetchEmployees();
        });

        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            const page = $(this).attr('href').split('page=')[1];
            fetchEmployees(page);
        });

        $(document).on('click', '.view-btn', function() {
            const employeeId = $(this).data('id');

            $.ajax({
        url: `/employees/${employeeId}`, 
        method: 'GET',
        success: function(response) {

            $('#view_name').text(response.name);
            $('#view_department').text(response.department);
            $('#view_job_title').text(response.job_title);
            $('#view_email').text(response.email);
            $('#view_hire_date').text(response.hire_date);
            $('#view_salary').text(response.salary);
            $('#view_location').text(response.location);
            $('#view_status').text(response.status);
            $('#view_performance_rating').text(response.performance_rating);
            
            $('#employeeModal').modal('show');
        },
        error: function(xhr) {
            console.log(xhr.responseText); 
        }
    });
});

</script>
    </body>
</html>