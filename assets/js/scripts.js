$(document).ready(function() {
    $('#filterForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: '../controllers/EmployeeController.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#employeeTableBody').html(response);
            }
        });
    });
})