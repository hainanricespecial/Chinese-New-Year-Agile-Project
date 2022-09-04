<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Create a connection to the SQL database -->
    <?php require_once("connection.php"); ?>

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand">CNY Content Management System</a>
        </div>

    </nav>

    <!-- Check if login details are valid -->
    <?php

    session_start();

    /* Set the login alert */
    $errorLogin = False;

    /* Get the username and password from POST */
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = mysqli_real_escape_string($connection, $_POST['usernameInput']);
        $password = mysqli_real_escape_string($connection, $_POST['passwordInput']);

        $query = mysqli_prepare($connection, "SELECT adminPassword from adminaccounts WHERE adminName = ? ");
        $query->bind_param('s', $username);
        $execute = mysqli_stmt_execute($query);
        
        $query->bind_result($databasepassword);
        $query->fetch();
        
        /* If found, display the content, if not found, display 'content not found' message. */
        if (password_verify($password, $databasepassword)) 
        {

                $_SESSION['login_user'] = $username;
                
                header("Location: index.php");

                /* Reset the login alert */
                $errorLogin = False;
            
        } 
        else 
        {
            $errorLogin = True;
        }
        
    }


    ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="page-header">

                Login

            </h1>

            <div class="row">
                <div class="col-md-4"></div>

                <!-- Login Form -->
                <div class="col-md-4">

                    <form class="login_form" style="background-color: #404040; padding: 20px; color: #fff;" method="POST" action="login.php">

                        <!-- Notify invalid login input -->
                        <div class="form-group">
                           <?php 
                                if ($errorLogin == True)
                                {
                                    echo "<label>Your login input is invalid.</label>";
                                }
                                
                           ?> 
                           
                        </div>

                        <div class="form-group">
                            <label for="usernameInput">Username</label>
                            <input type="text" class="form-control" name="usernameInput" placeholder="Username" required>
                        </div>

                        <div class="form-group">
                            <label for="passwordInput">Password</label>
                            <input type="password" class="form-control" name="passwordInput" placeholder="Password" required>
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>

                    </form>
                </div>

                <div class="col-md-4"></div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>