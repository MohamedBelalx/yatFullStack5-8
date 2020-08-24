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
                                        <td> <a href='#' class='btn btn-primary'>delete</a></td>
                                    </tr>";

                                }
                            }else
                            {
                                echo "<h1>No Posts Yet</h1>";
                            }
                         
                         
                        ?>
                        </table>
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
