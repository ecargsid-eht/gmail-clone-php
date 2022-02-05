<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Gmail -Faster, Reliable and Easy</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .foc:focus{
            box-shadow: none;
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto">
                <div class="card shadow-lg border-0" style="margin-top: 150px; border-radius:9px; padding:30px">
                    <div class="row">
                        <div class="col-5">
                            <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-icon-png-transparent-background-osteopathy-16.png" class="card-img" style="padding-top: 40px; padding-bottom:40px; border-right:4px solid green; border-radius:0px;">
                        </div>

                        <div class="col-6">

                            <h4 class="h4 mb-3" style="text-decoration:3px green underline; text-underline-offset:3px">Google Sign In</h4>

                            <form action="" method="post">
                                <div class="mb-3">
                                <label for=""> <p class="lead fs-5 mb-0">Email/Username</p> </label>
                                <input type="email" name="email" id="" class="form-control foc" style="border: none; border-radius:0%; border-bottom: 1px solid grey; width:17pc">
                                </div>
                                <div class="mb-3">
                                <label for=""> <p class="lead fs-5 mb-0">Password</p></label>
                                <input type="password" name="password" class="form-control foc" style="border: none; border-radius:0%; border-bottom: 1px solid grey; width:17pc">
                                </div>
                                <div class="mb-3">
                                <input type="submit" name="login" class="btn btn-outline-danger w-100" style="border-radius: 9px;">
                                </div>

                                <div class="mb-3">
                                    <a href="" class="text-muted small float-start">Forgot Password?</a>
                                    <a href="create.php" class="text-muted small float-end">Sign Up</a>
                                </div>
                            </form>

                            <?php
                                if(isset($_POST['login'])){
                                    $email = $_POST['email'];
                                    $password = md5($_POST['password']);

                                    $check = mysqli_query($connect,"select * from accounts where email='$email' AND password='$password'");

                                    $count = mysqli_num_rows($check);
                                    echo $count;
                                    if($count > 0){
                                        $_SESSION['user'] = $email;
                                        header("location: index.php");
                                        exit();
                                    }
                                    else{
                                        echo "<script>alert('Email or password is incorrect')</script>";
                                    }
                                }
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>