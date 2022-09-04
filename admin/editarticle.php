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

    <title>CNY Content Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- TinyMCE for WYSIWYG editor -->
    <script type="text/javascript" src="js/plugins/tinymce/tinymce.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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


    <!-- PHP for loading the data within MySQL to load the article title and content -->
    <?php

    /* Get specific entry */
    $articleID = $_POST['articleID'];
    $editCommand = mysqli_prepare($connection, "SELECT * from articles WHERE article_id = ?");
    $editCommand->bind_param('i', $articleID);
    $execute = mysqli_stmt_execute($editCommand);

    $content = $editCommand->get_result();

    /* If found, display the content, if not found, display 'content not found' message. */
    if ($content) {

        while ($row = $content->fetch_assoc()) {
            $articleTitle = $row['article_title'];

            $articleContent = $row['article_content'];
        }
    } 
    else 
    {
        echo "Sorry, the contents could not be found!";
    }

    ?>

    <!-- Javascript to initialize TinyMCE -->
    <script>
        tinymce.init({
            selector: 'textarea#editor',
            verify_html: true,
            plugins: 'lists, image, table',
            toolbar: 'image | undo redo | bold italic | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent',
            auto_focus: 'element1',

            /* Create a file picker for images */
            image_title: true,
            file_picker_types: 'image',

            file_picker_callback: (cb, value, meta) => {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.addEventListener('change', (e) => {
                    const file = e.target.files[0];

                    const reader = new FileReader();
                    reader.addEventListener('load', () => {
                        /*
                        Note: Now we need to register the blob in TinyMCEs image blob
                        registry. In the next release this part hopefully won't be
                        necessary, as we are looking to handle it internally.
                         */
                        const id = 'blobid' + (new Date()).getTime();
                        const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        const base64 = reader.result.split(',')[1];
                        const blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    });

                    reader.readAsDataURL(file);
                });

                input.click();
            },

            /* To make sure that the user has inputted any information in the TinyMCE editor */
            setup: function(editor) {
                editor.on('change', function() {
                    tinymce.triggerSave();
                });

                editor.on('init', function(e) {

                    editor.setContent(`<?php echo htmlspecialchars_decode($articleContent) ?>`);

                });

            }



        });
    </script>


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
                            Edit Article

                        </h1>

                        <form action="editarticleresult.php" method="post">

                            <!-- Article Title -->
                            <h3 class='mb-2'>Article Title</h3>

                            <?php
                            echo "<input class='article_title_input' name='articleTitle' type='text' value='$articleTitle' placeholder='Write your article title here.'> </input>";
                            ?>

                            <!-- Article Content -->
                            <textarea name="articleContentEdited" id="editor"></textarea>

                            <br>

                            <!-- Get Current Date -->
                            <?php
                            $date = date("Y-m-d");

                            echo "<input type='hidden' name='date' value='$date'>";
                            echo "<input type='hidden' name='articleID' value='$articleID'>";
                            ?>

                            <button type="submit">Edit Article</button>

                        </form>



                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jeditCommand -->
    <script src="js/jeditCommand.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>