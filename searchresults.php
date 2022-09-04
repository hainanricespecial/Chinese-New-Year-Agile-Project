<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" searchResults="IE=edge">
    <meta name="viewport" searchResults="width=device-width, initial-scale=1">
    <meta name="description" searchResults="">
    <meta name="author" searchResults="">

    <title>Chinese New Year</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- Create a connection to the SQL database -->
    <?php require_once("includes/connection.php"); ?>

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
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CHINESE NEW YEAR</a>
            </div>
            <!-- Collect the nav links, forms, and other searchResults for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <!-- Get the main 5 articles -->
                    <?php

                    $getMainArticles = mysqli_query($connection, "SELECT article_id, article_title from articles");

                    while ($row = mysqli_fetch_array($getMainArticles)) {
                        echo "<li>";
                        echo "<a href='post.php?id=$row[article_id]'>" . $row['article_title'] . "</a>";
                        echo "</li>";
                    }


                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <img src="HOP.PNG" alt="CNY" width="1518" height="610">

    <!-- Page searchResults -->
    <div class="container">

        <!-- Get search result based on search query on the URL. -->
        <div class="row">

            <?php

            /* SQL command for getting search results */
            $searchTerm = $_GET['search'];
            $searchTerm = "%$searchTerm%";

            $searchCommand = mysqli_prepare($connection, "SELECT article_id, article_title, article_content FROM articles WHERE article_content LIKE ?");
            $searchCommand->bind_param('s', $searchTerm);
            $execute = mysqli_stmt_execute($searchCommand);

            $searchResults = $searchCommand->get_result();

            /* Display search results or inform user that no search results are found. */
            if (mysqli_num_rows($searchResults) != 0) {
                $rowfound = mysqli_num_rows($searchResults);
                echo "<h1> $rowfound results found. </h1>";

                /* Grab the data */
                while ($row = $searchResults->fetch_assoc()) {

                    echo "<h3> <a href='post.php?id=$row[article_id]'>" . $row['article_title'] . "</a> </h3>";

                    /* Create a preview of the articles */
                    $articleContent = strip_tags(html_entity_decode($row['article_content']));
                    $articlePreview = explode('.', $articleContent);
                    echo "<h4>" . $articlePreview[0] . "...</h4>";
                }
            } else {
                echo "<h1> No results found. </h1>";
            }



            ?>

            <hr>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CNY Informational Website 2022</p>
                </div>
                <!-- /.col-lg-12 -->
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