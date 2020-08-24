<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

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
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
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

                <?php

                    include('layout/db.php');

                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM posts WHERE id='$id'";

                        $result = mysqli_query($connection,$sql);
    
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($rows = mysqli_fetch_assoc($result))
                            {
                                $id = $rows['id'];
                                $img = $rows['img'];
    
    
                                echo "
                                    <h2>
                                        <a href='#'>{$rows['title']}</a>
                                    </h2>
                                    <p class='lead'>
                                        by <a href='index.php'>{$rows['author']}</a>
                                    </p>
                                    <p><span class='glyphicon glyphicon-time'></span>{$rows['created_at']}</p>
                                    <hr>
                                    <img class='img-responsive' src='{$img}' alt=''>
                                    <hr>
                                    <p>{$rows['body']}</p>                    
                                    <hr>
                                
                                ";
    
                            }
    
                        }else
                        {
                            echo "<h1>No Posts Yet</h1>";
                        }


                    }

                
                ?>
                <!-- Post Content -->
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form action="post.php?id=<?php echo $_GET['id'] ?>" method="POST">
                        <div class="form-group">
                            <textarea name='comment' class="form-control" rows="3"></textarea>
                        </div>
                        <button name='send' type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <?php

                    if(isset($_POST['send']))
                    {
                        $id = $_GET['id'];
                        $comment = $_POST['comment'];

                        $sql = "INSERT INTO comments(body,post_id) VALUES('$comment','$id')";
                        if(mysqli_query($connection,$sql))
                        {
                            echo "<div class='alert alert-primary'>Insert is ok</div>";
                        }else
                        {
                            echo 'error' . mysqli_error($connection);
                        }

                    }
                
                
                ?>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <?php 

                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM COMMENTS WHERE post_id=$id";
                        $result = mysqli_query($connection,$sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($rows = mysqli_fetch_assoc($result))
                            {
                                $body = $rows['body'];
                                echo "<div class='media'>
                                    <a class='pull-left' href='#'>
                                        <img class='media-object' src='http://placehold.it/64x64' alt=''>
                                    </a>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>Start Bootstrap
                                            <small>August 25, 2014 at 9:30 PM</small>
                                        </h4>
                                        {$body}
                                    </div>
                                </div>";
                            }
                        }else
                        {
                            echo "<h1>No Comments Yet</h1>";
                        }
                    }
                
                ?>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
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
