<?php

session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}

?>

<?php include('pages/header.php') ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include('pages/nav.php') ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <h2>This is All Posts</h2>

                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>author</th>
                            <th>delete</th>
                            <th>update</th>
                        </tr>
                        <?php 
                            
                            include('../layout/db.php');

                            $sql = "SELECT id,title,author FROM posts";

                            $result = mysqli_query($connection,$sql);

                            if(mysqli_num_rows($result) > 0)
                            {
                                while($rows = mysqli_fetch_assoc($result))
                                {

                                    $id = $rows['id'];

                                    

                                    echo "<tr>
                                        <td>{$id}</td>
                                        <td>{$rows['title']}</td>
                                        <td>{$rows['author']}</td>
                                        <td> <a href='delete.php?id={$id}' class='btn btn-danger'>delete</a> </td>
                                        <td> <a href='update.php?id={$id}' class='btn btn-primary'>update</a></td>
                                    </tr>";

                                }
                            }else
                            {
                                echo "<h1>No Posts Yet</h1>";
                            }
                         
                         
                        ?>
                        </table>

                        <hr>

                        <div class="form">
                            <form action="index.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                                </div>
                                <div class="form-group">
                                    <label for="">Body</label>
                                    <textarea class='form-control' name="body" cols="30" rows="10"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Author</label>
                                    <input type="text" name="author" class="form-control" placeholder="Enter Post Author">
                                </div>

                                <div class="form-group">
                                    <label for="">Img</label>
                                    <input type="file" name="img" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Tags</label>
                                    <input type="text" name="tags" class="form-control" placeholder="Enter Post Tags">
                                </div>
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <input type="text" name="cat" class="form-control" placeholder="Enter Post Category">
                                </div>

                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="datetime-local" name="date" class="form-control" placeholder="Enter Post Title">
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="send" class="btn btn-primary btn-block">
                                </div>
                            </form>

                            <?php 
                            

                                if(isset($_POST['send']))
                                {
                                    $title = $_POST['title'];
                                    $body = $_POST['body'];
                                    $author= $_POST['author'];
                                    $cat = $_POST['cat'];
                                    $tags = $_POST['tags'];
                                    
                                    $date = $_POST['date'];
            

                                    $target = "img/";
                                    $file = $target . basename($_FILES['img']['name']);
                                    $exact = 'admin/' . $file;
                                    move_uploaded_file($_FILES['img']['tmp_name'],$file);

                                    $sql = "INSERT INTO posts(title,body,author,img,tags,cat,created_at)
                                    VALUES('$title','$body','$author','$exact','$tags','$cat','$date')";

                                    if(mysqli_query($connection,$sql))
                                    {
                                        echo "<h1>New Post Is Added</h1>";
                                    }else
                                    {
                                        echo 'Error ' . mysqli_error($connection);
                                    }
                                    


                                }
                            
                            ?>

                        </div>
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
