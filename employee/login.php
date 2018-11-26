<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>U - Tust Bank Employee Management | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="login_validate.php">
                    <h1>Employee Login</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Employee Id" required="" name="employee_id"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" name="employee_password" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit" name="SubmitButton">Login</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
