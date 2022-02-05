<?php include "connect.php"; 
if(!isset($_SESSION['user'])){
    // echo "<script>window.open('login.php','_self')</script>";
    header("location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draft mail | Gmail -Faster, Reliable and Easy</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

</head>

<body>
    <?php include "header.php" ?>


    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-2" style="border-right: 2px solid #eee;">
                <?php include "side.php" ?>
            </div>

            <div class="col-lg-10">
                <table class="table">

                    <thead class="thead-dark">
                        <tr>
                            <!-- <th>#</th> -->
                            <th>To</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php
                        $id = $user['id'];
                        $mails = mysqli_query($connect,"select * from mails JOIN accounts on mails.receiver_id=accounts.id where sender_id='$id' AND status='1' ORDER by mails.m_id DESC");
                        while ($row = mysqli_fetch_array($mails)){

                    ?>
                    <tr>
                        <!-- <td><?= $row['id'] ?></td> -->
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['content'] ?></td>
                        <?php
                            $date = $row['date'];
                        ?>
                        <td><?= $row['date'] ?></td>
                        <td>
                        <form method="post" >
                            <button class="btn btn-success rounded-pill"  name="update"><i class="bi bi-send"></i></button>

                        </form>
                        </td>
                    </tr>
                    <?php
                        if(isset($_POST['update'])){
                            $id = $row['m_id'];
                            $sendmail = mysqli_query($connect,"UPDATE mails SET status='0' where mails.m_id='$id'");

                            if($sendmail){
                                echo "<script>window.open('draft.php','_self')</script>";
                            }

                        }
                    }
                        
                        ?>
                </table>
            </div>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>