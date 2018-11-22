
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Terminate client</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
         <a href="../signup_login/login.php"><button type="submit" style="font-size: 16px; float:right; margin-right:20px;">Log out</button>
        <a href="../employee_home_page/employee_home_page.php"><button type="submit" style="font-size: 16px; float:right;">Homepage</button></a></a>
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form action="../signup/signup.php">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Hello </p>
					    <ul> 
						   <li><a href="../employee_home_page/employee_home_page.php">Home employee page</a></li>
						   <li><a href="../hire_employee/hire_employee.php">Hire employee</a></li>
						   <li><a href="../fire_employee/fire_employee.php">Fire employee</a></li>
						   <li><a href="../close_client_account/close_client_account.php">Close client account</a></li>
						 </ul>
                    <br>
                    Input client ID to search for: <input type="text" name="client_id"> <input type="button" value="Search">
					<br>
					<br>

					<table class="display_client_info">
						Client information:
						<tr>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Date of birth</td>
							<td>Email address</td>
							<td>Tittle</td>
						</tr>

						<tr class="client_info">
							<td id="First_Name">James</td>
							<td id="Last_Name">Nguyen</td>
							<td id="Date_Of_Birth">20/10/1969</td>
							<td id="Email_address">viethuy25@yahoo.com.vn</td>
							<td id="Tittle">Mr.</td>
						</tr>
					</table>

					<br>

					<button type="submit" style="font-size: 16px" formaction="../employee_home_page/employee_home_page.php">Delete client</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
