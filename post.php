<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Create a connection to the SQL database -->
    <?php require_once("includes/connection.php"); ?>

    <title>CNY Article Post</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#0dcaf0;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: #ffffff;">CHINESE NEW YEAR</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <!-- Get the main 5 articles -->
                    <?php

                    $getMainArticles = mysqli_query($connection, "SELECT article_id, article_title from articles");

                    while ($row = mysqli_fetch_array($getMainArticles)) {
                        echo "<li>";
                        echo "<a style='color: #ffffff;' href='post.php?id=$row[article_id]'>" . $row['article_title'] . "</a>";
                        echo "</li>";
                    }


                    ?>

                    <li>
                        <a style='color: #ffffff;' href='CNYWebsite/index.php'>Shopping</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Get the article content based on ID on the URL. -->
                <?php

                    $articleID = $_GET['id'];
                    $postDisplay = mysqli_prepare($connection, "SELECT * from articles WHERE article_id = ?");
                    $postDisplay->bind_param('i', $articleID);
                    $execute = mysqli_stmt_execute($postDisplay);

                    $content = $postDisplay->get_result();

                    /* If found, grab the data and then display the content, if not found, display 'content not found' message. */
                    if (mysqli_num_rows($content) != 0) 
                    {

                        /* Grab the data */
                        while ($row = $content->fetch_assoc()) 
                        {

                            $articleTitle = $row['article_title'];

                            $articleContent = $row['article_content'];

                            $articleCreateDate = $row['article_created_date'];

                            $articleModifiedDate = $row['article_last_modified_date'];

                        }

                        /* Display the article content */

                        /* Article Title */
                        echo "<h1>";
                        echo $articleTitle;
                        echo "</h1>";

                        echo "<hr>";

                        /* Date Time Posted */
                        echo "<p>";
                        echo "<span class='glyphicon glyphicon-time'></span>";
                        echo " Posted on " . $articleCreateDate;
                        echo "</p>";

                        /* Date Time Modified */
                        echo "<p>";
                        echo "<span class='glyphicon glyphicon-time'></span>";
                        echo " Last modified on " . $articleModifiedDate;
                        echo "</p>";

                        echo "<hr>";

                        /* Article Content */
                        echo htmlspecialchars_decode($articleContent);

                        echo "<hr>";


                    } 
                    else 
                    {
                        echo "Sorry, the page could not be found!";
                    }

                ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">

                    <h4>Blog Search</h4>
                   
                        <form action ="searchresults.php" method="GET">

                        <div class="input-group">
                                <input type="text" class="form-control" name="search" value="" required>

                                <span class="input-group-btn">
                                    <button type='submit' class='btn btn-primary inline-button'> <span class="glyphicon glyphicon-search"></span> </button>
                                </span>

                        </div>

                        </form>
                       
                   
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CNY Informational Website 2022</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>