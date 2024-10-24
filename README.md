## GNB-TECH SOFTWARE SOLUTIONS PVT LTD
  
<h3>  Develop a core PHP application that combines and displays data from three employee tables, implementing filtering and pagination functionalities using AJAX. </h3>
<h4>  </h3>Instructions:  </h4>
<p> Database Structure: </p> 

<p>create and analyze the three employee tables (e.g., employees_1, employees_2, employees_3). </p> 
<p>Create a SQL query to retrieve and combine the following relevant fields</p>
<p></p><ul>
  <li>id</li>
  <li>name</li>
  <li>department</li>
  <li>job_title</li>
  <li>email</li>
  <li>hire_date</li>
  <li>salary</li>
  <li>location</li>
  <li>status (e.g., active, inactive)</li>
  <li> Performance_rating</li>
</ul></p>

<p>Make sure there’s no duplicated records.</p>
<p>Generate and insert 100k dummy employee records on three tables.</p> 
<h4>  Backend Development: </h4>
<p>Establish a secure database connection using PDO with error handling.</p> 
<p>Write a SQL query to retrieve combined employee data with filtering options:</p> 
<p>Allow filters for department, job_title, status, and a date range for
hire_date.</p> 
<h4>  Ensure the query dynamically constructs based on user-selected filter criteria.
Filtering Fields: </h4>
<p>Department Filter:</p>
<p>Field Type: Dropdown or Multi-select</p>
<p>FOptions: List of departments (e.g., HR, IT, Sales, Marketing).</p>
<p>Functionality: Allow users to select one or multiple departments to filter the
<p>Job Title Filter:</p>
<p>Field Type: Dropdown or Multi-select</p>
<p>Options: List of job titles (e.g., Manager, Developer, Analyst, Sales
Representative).</p>
<p>Functionality: Allow users to select one or multiple job titles for filtering.</p>
<p>Status Filter:</p>
<p>Field Type: Radio buttons or Checkbox</p>
<p>Options:</p>
<p>Active</p>
<p>Inactive</p>
<p>Functionality: Allow users to filter employees based on their current employment
<p>Performance Rating Filter:</p>
<p>Field Type: Range Slider or Dropdown</p>
<p>Options: A range of ratings (e.g., 1 to 5).</p>
<p>Functionality: Allow users to select a range of performance ratings to filter the
results.</p>
<p>Hire Date Filter:</p>
<p>Field Type: Date Range Picker</p>
<p>Options: Start Date and End Date inputs.</p>
<p>Functionality: Allow users to filter employees based on their hire date, specifying</p>
<p>range</p>
<p>Field Type: Dropdown or Multi-select</p>
<p>Options: List of locations (e.g., New York, San Francisco, Remote).</p>
<p>Functionality: Allow users to select one or multiple locations for filtering..</p>
<h4> AJAX Implementation:</h4>
<p>Implement AJAX for filtering and pagination:</p>
<p>I Create a PHP script that responds to AJAX requests, returning filtered and
paginated results.</p>
<p>Ensure the client-side script captures filter inputs and current pagination
state, sending these to the server.</p>
<p>Update the displayed results without reloading the page.</p>
<h4>Pagination Logic:</h4> 
<p>Implement pagination logic in the AJAX response:</p> 
<p>Calculate total records and determine the current page based on user
input.</p>
<p>Return the correct subset of results for the current page, along with
pagination controls.</p> 
<h4>Data Presentation:</h4> 
<p>Output the combined data in a structured HTML table format.</p> 
<p> Include column headers for each field and ensure clear data presentation.</p>
<p>Provide filter options (dropdowns or checkboxes) above the table to allow users
to apply filters, triggering the AJAX calls.</p> 

<h2 style="font-weight: bold";>Requirements  </h2>
<ul>
  <li> PHP 7.4+  </li>
  <li> MySQL 5.7 </li>
  <li> Apache Server</li>
</ul>
<h2 style="font-weight: bold";>Project Setup Instructions   </h2>
<ul>
  <li> Clone the Project Eg : https://github.com/hashimpk07/gnb1.git (or)  download  </li>
  <li> Set up the database and import `gnb.sql` </li>
  <li> composer install or composer init </li>
  <li> Run the project by navigating to  project URL </li>
</ul>
      Clone the Project Eg : https://github.com/hashimpk07/gnb1.git (or)  download 
 
