<?php

if(isset($_GET['id']))
{
    include('../layout/db.php');

    $id = $_GET['id'];


    $sql = "DELETE FROM posts WHERE id='$id'";

    if(mysqli_query($connection,$sql))
    {
        header('location:index.php');
    }
}


?>