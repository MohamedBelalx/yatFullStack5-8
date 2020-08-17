<?php include('layout/header.php'); ?>
    <!-- Navigation -->
<?php include('layout/nav.php') ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <?php
                    include('layout/db.php');

                    if(isset($_GET['cat']))
                    {
                        $cat = $_GET['cat'];
                        $sql = "SELECT * FROM posts WHERE cat='$cat' ORDER BY id DESC";
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
                                    <a class='btn btn-primary' href='post.php?id={$id}'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>
                    
                                    <hr>
                                
                                ";
    
                            }
    
                        }else
                        {
                            echo "<h1>No Posts Yet</h1>";
                        }
    

                    }else
                    {
                        $sql = "SELECT * FROM posts ORDER BY id DESC";
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
                                    <a class='btn btn-primary' href='post.php?id={$id}'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>
                    
                                    <hr>
                                
                                ";
    
                            }
    
                        }else
                        {
                            echo "<h1>No Posts Yet</h1>";
                        }
    
                    }

                
                
                
                ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include('layout/search.php')?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
<?php include('layout/footer.php') ?>