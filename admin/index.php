<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Check if the user has logged in -->
    <?php
    
        session_start();
        if (empty($_SESSION["login_user"])) 
        {
            header("Location: login.php");
        } 

        else 
        {
            
        } 
        
    ?>

    <!-- Create a connection to the SQL database -->
    <?php require_once("connection.php"); ?>

    <title>CNY Content Management System</title>

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

    <div id="wrapper">



        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CNY Content Management System</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION["login_user"] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>

                    </ul>
                </li>

            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="createarticle.php"><i class="fa fa-fw fa-file"></i> Create New Articles</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard

                        </h1>

                        <?php

                        echo "<table>

                            <!-- Header of Table -->
                            <tr>
                                <th>ID</th>
                                <th>Article Name</th>
                                <th>Article Date</th>
                                <th>Last Modified Date</th>
                                <th>Action</th>
                            </tr>";

                        /* Content of Table Entries */

                        /* Get all entries */
                        $result = mysqli_query($connection, "SELECT * from articles");

                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";

                            /* Entry ID */
                            echo "<td>" . $row['article_id'] . "</td>";

                            /* Article Title */
                            echo "<td>" . $row['article_title'] . "</td>";

                            /* Article Created Date */
                            echo "<td>" . $row['article_created_date'] . "</td>";

                            /* Article Last Modified Date */
                            echo "<td>" . $row['article_last_modified_date'] . "</td>";

                            /* Action Buttons */
                            echo "<td>";


                            /* Action Buttons (Edit) */
                            echo "<form action='editarticle.php' method='post'>";
                            echo "<input type='hidden' name='articleID' value='$row[article_id]'>";
                            echo "<button type='submit' class='btn btn-secondary'> <i class='fa fa-pencil'></i> Edit </button>";
                            echo "</form>";

                            echo "<br>";

                            /* Action Buttons (Delete) */
                            echo "<form action='deletearticleresult.php' method='post'>";
                            echo "<input type='hidden' name='articleID' value='$row[article_id]'>";
                            echo "<button type='submit' class='btn btn-secondary' onclick='return confirm(`Are you sure?`)'> <i class='fa fa-trash'></i> Delete</button>";
                            echo "</form>";



                            echo "</td>";

                            echo "</tr>";
                        }

                        echo "</table>";

                        ?>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>