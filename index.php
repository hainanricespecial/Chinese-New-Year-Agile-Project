<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#0dcaf0;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: #ffffff;">CHINESE NEW YEAR</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="text-decoration-color:#fff">
                <ul class="nav navbar-nav">

                <!-- Get the main 5 articles -->
                <?php 

                    $getMainArticles = mysqli_query($connection, "SELECT article_id, article_title from articles");

                    while ($row = mysqli_fetch_array($getMainArticles)) 
                    {
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

    <img src="HOP.PNG" alt="CNY" width="1518" height="610" style="margin-bottom: 20px;">

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    YEAR OF THE TIGER
            
                    <br><br>
                    <small>Tigers are the third of the Chinese zodiacs. As indicated by legend, Tiger was sure that nobody could contend with speed and power for the heavenly race would choose the request for the zodiacs. Nonetheless, when Tiger moved out of the stream, thinking it was first, it was educated that Rat set first for its guile and Ox put second for its industriousness. This left the lord of the wilderness making due with third spot.</small>
                </h1>

                <h3 class="page-header">
                    Tigers are valiant and dynamic individuals who love a decent test and experience throughout everyday life.
                    <br><br>
                    <small>
                        Like their eponymous zodiac creature, individuals brought into the world in long periods of the Tiger are overwhelming and aggressive, trying and fearless, energetic and liberal, self-assured with a feeling of equity and a guarantee to help other people for everyone's benefit.
                    </small>
                </h3>

                <h1>
                    FAQ for Chinese New Year in 2022 :
                </h1>

                <hr>

                <!-- When is CNY? -->

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <a data-toggle="collapse" href="#CNYDate" aria-expanded="false" aria-controls="CNYDate">
                        When is Chinese New Year?
                        </a>

                    </div>

                    <div class="panel-collapse collapse" id="CNYDate">

                        <div class="panel-body">
                        Chinese New Year for this year will be at <b>Tuesday, February 1</b>.
                        </div>

                    </div>

                </div>
                         
                <hr>

                <!-- How Long is CNY? -->
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <a data-toggle="collapse" href="#CNYLength" aria-expanded="false" aria-controls="CNYLength">
                        How long is Chinese New Year?
                        </a>

                    </div>

                    <div class="panel-collapse collapse" id="CNYLength">

                        <div class="panel-body">
                        Chinese New Year lasts for <b>16 days</b>.
                        </div>

                    </div>
                
                </div>

                <hr>

                <!-- What is the Zodiac this year? -->
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <a data-toggle="collapse" href="#WhatZodiac" aria-expanded="false" aria-controls="WhatZodiac">
                        What is the 2022 Chinese Zodiac?
                        </a>

                    </div>

                    <div class="panel-collapse collapse" id="WhatZodiac">

                        <div class="panel-body">
                        The zodiac for this year is <b>Tiger</b>.
                        </div>

                    </div>

                </div>
               
                <hr>

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
