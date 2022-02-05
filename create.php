<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create mail | Gmail -Faster, Reliable and Easy</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body style="background-color: #eee;">
    <?php include "header.php" ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8">

            </div>

            <div class="col-4">
                <div class="card shadow-lg border-0" style="border-radius: 9px;" >
                    <div class="card-header" style="background-color: white; border-radius:9px;"><p class="lead fs-4 mb-0">Create an Account</p></div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                    <label for="">D.O.B</label>
                                    <input type="date" name="dob" class="form-control">
                                </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">Contact</label>
                                    <input type="text" name="contact" id="" class="form-control">
                                </div>
                                
                                <div class="mb-3 col">
                                    <label for="">Gender</label>
                                    <select name="gender" id="" class="form-select">
                                        <option value="0">Choose Gender</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                        <option value="o">Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                
                                <input type="submit" value="Create Account" name="create" class="btn btn-primary w-100">
                            </div>
                        </form>

                        <?php
                            if(isset($_POST['create'])){
                                $name = $_POST['name'];
                                $contact = $_POST['contact'];
                                $email = $_POST['email'];
                                $gender = $_POST['gender'];
                                $password = md5($_POST['password']);
                                $dob = $_POST['dob'];

                                $query = mysqli_query($connect,"insert into accounts (name,contact,email,gender,password,dob) value ('$name','$contact','$email','$gender','$password','$dob')");

                                if($query){
                                    // $_SESSION['user'] = $email;
                                    echo "<script>window.open('login.php','_self')</script>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>