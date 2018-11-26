
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Fire Staff</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
        <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button></a>
          <a href="../employee_home_page/employee_home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a>
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form action="../signup/signup.php">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Terminate Employee </p>
					    <ul> 
						   <li><a href="../employee_home_page/employee_home_page.php">Home employee</a></li>
						   <li><a href="../hire_employee/hire_employee.php">Hire employee</a></li>
						   <li><a href="../close_client_account/close_client_account.php">Close client account</a></li>
						   <li><a href="../terminate_client/terminate_client.php">Terminate Client</a></li>
						 </ul>
                    <br><br>
					Input employee ID to search for: <input type="text" name="employee_id"> <input type="button" value="Search">
					<br>
					<br>

					<table class="display_employee_info">
						Employee information:
						<tr>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Age</td>
							<td>Position</td>
							<td>Payroll</td>
							<td>Sick days left</td>
						</tr>

						<tr class="employee_info">
							<td id="First_Name">James</td>
							<td id="Last_Name">Nguyen</td>
							<td id="Age">20</td>
							<td id="Position">President</td>
							<td id="Payroll">1,000,000</td>
							<td id="Sick_day_left">7</td>
						</tr>
					</table>

					<br>

					<button type="submit" style="font-size: 16px" formaction="../employee_home_page/employee_home_page.php">Delete employee</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
