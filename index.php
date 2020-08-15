<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <div class="container h-100 d-flex justify-content-center align-items-center flex-column">
            <div class="buttons">
                <button class="btn btn-primary" id='login'>Login</button>
                <button class="btn btn-danger" id='register'> Register </button>
            </div>
            <?php

                if(isset($_GET['insert']))
                {
                    echo "<div class='alert alert-primary'>Register is Complete Login Please</div>";
                }

                if(isset($_GET['error']))
                {
                    echo "<div class='alert alert-danger'>No Such User Found</div>";
                }
       
            
            ?>
            <div class="login">
                <form action='index.php' method='POST'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name='password' type="password" class="form-control" id="exampleInputPassword1" required>
                        <small id="emailHelp" class="form-text text-muted">Forget Your Password ?</small>

                    </div>
                    <button name='login' type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>


            <div class="register">
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for=""> User Name </label>
                        <input name="name" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" required>
                        <small id="emailHelp" class="form-text text-muted">Forget Your Password ?</small>

                    </div>
                    <div class="form-group">
                        <label for=""> Phone Number </label>
                        <input name="phone" type="text" class="form-control" required>
                    </div>

                    <div class="form-check form-check-inline">
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" required>
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" required>
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>

                    <button name="register" type="submit" class="btn btn-danger btn-block mt-3">Submit</button>
                </form>
            </div>

        </div>
    </header>
    

    <?php

        $connection = mysqli_connect('localhost','root','','yatfullstack112');

        if(isset($_POST['register']))
        {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];

            $sql = "INSERT INTO users(name,mail,pass,phone,gender) 
            VALUES('$name','$mail','$pass','$phone','$gender')";

            if(mysqli_query($connection,$sql))
            {
                header('location:index.php?insert=ok');
            }else
            {
                echo 'error' . mysqli_error($connection);
            }
        }


        if(isset($_POST['login']))
        {
            $mail = $_POST['email'];
            $pass = $_POST['password'];

            $sql = "SELECT * FROM users WHERE mail='$mail' AND pass='$pass'";

            $result = mysqli_query($connection,$sql);

            if(mysqli_num_rows($result) > 0)
            {
                header('location:home.php');
            }else
            {

                header('location:index.php?error=1');
            }
        }

    ?>




    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/index.js"></script>
</body>
</html>