




                <!-- Page Heading -->


<h1>please Login To access</h1>
<form action="login.php" method='POST'>
    <div class="form-group">
        <label for=""> E-Mail </label>
        <input type="text" name="mail" class="form-control">
    </div>
    <div class="form-group">
        <label for=""> Password </label>
        <input type="password" name="pass" class="form-control">
    </div>
    <div class="form-gruop">
    
        <input type="submit" name="login" id="" class="btn btn-primary btn-block">
    </div>


</form>
<?php
include('../layout/db.php');

if(isset($_POST['login']))
{
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM admin WHERE mail='$mail' AND password='$pass'";

    $result = mysqli_query($connection,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        session_start();
        while($rows = mysqli_fetch_assoc($result))
        {
            $_SESSION['id'] = $rows['id'];
        }
        echo $_SESSION['id'];

        header("location:index.php");
    }else
    {
        echo "<h1>error login</h1>";
    }
}
?>