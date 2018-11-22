
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Close client account</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
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
						   <li><a href="../terminate_client/terminate_client.php">Terminate Client</a></li>
						 </ul>

					<br> 
		            <button type="submit" style="font-size: 16px" formaction="../employee_home_page/employee_home_page.php">Log out</button>
                	<br>
                	<br>

					Input account number to search for: <input type="text" name="client_id"> <input type="button" value="Search">
					<br>
					<br>

					<table class="display_account_info">
						Client information:
						<tr>
							<td>Account number</td>
							<td>Type</td>
							<td>Service</td>
							<td>Balance</td>
						</tr>

						<tr class="account_info">
							<td id="account_number">40023289</td>
							<td id="type">Owner</td>
							<td id="service">Cooperate</td>
							<td id="balance">19501969</td>
						</tr>
					</table>

					<br>

					<button type="submit" style="font-size: 16px" formaction="../employee_home_page/employee_home_page.php">Delete account</button>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
