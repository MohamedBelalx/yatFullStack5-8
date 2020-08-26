<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
    <?php
    if(isset($_GET['id']))
    {
        include('../layout/db.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM posts WHERE id='$id'";

        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            while($rows = mysqli_fetch_assoc($result))
            {
            ?>
                <form action="update.php?id=<?php echo $rows['id'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input value="<?php echo $rows['title'] ?>" type="text" name="title" class="form-control" placeholder="Enter Post Title">
                    </div>
                    <div class="form-group">
                        <label for="">Body</label>
                        <textarea class='form-control' name="body" cols="30" rows="10">
                        <?php echo $rows['body'] ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Author</label>
                        <input value="<?php echo $rows['author'] ?>" type="text" name="author" class="form-control" placeholder="Enter Post Author">
                    </div>

                    <div class="form-group">
                        <label for="">Img</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Tags</label>
                        <input value="<?php echo $rows['tags'] ?>" type="text" name="tags" class="form-control" placeholder="Enter Post Tags">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <input value="<?php echo $rows['cat'] ?>" type="text" name="cat" class="form-control" placeholder="Enter Post Category">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="send" class="btn btn-primary btn-block">
                    </div>
                </form>

                <?php

                    if(isset($_POST['send']))
                    {
                        $id = $_GET['id'];
                        $title = $_POST['title'];
                        $body = $_POST['body'];
                        $author= $_POST['author'];
                        $cat = $_POST['cat'];
                        $tags = $_POST['tags'];
                    

                        $target = "img/";
                        $file = $target . basename($_FILES['img']['name']);
                        $exact = 'admin/' . $file;
                        move_uploaded_file($_FILES['img']['tmp_name'],$file);

                        $sql = "UPDATE posts SET title='$title',body='$body',author='$author',img='$exact',
                        tags='$tags',cat='$cat' WHERE id='$id'";

                        if(mysqli_query($connection,$sql))
                        {
                            echo "<h1>New Post Is Added</h1>";
                        }else
                        {
                            echo 'Error ' . mysqli_error($connection);
                        }


                    }
                
                ?>








            <?php
            }
        }else
        {
            echo "<h1>Error Loading Data</h1>";
        }
    }

        
    
    ?>


    </div>
</body>
</html>