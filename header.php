<?php
if(isset($_SESSION['user'])){
    $log = $_SESSION['user'];
    $query = mysqli_query($connect,"select * from accounts where email = '$log'");
    $user = mysqli_fetch_array($query);
}

?>



<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a href="index.php" class="navbar-brand">GMAIL</a>

        <form action="" class="d-flex me-auto ms-5">
            <div class="input-group">
                <input type="search" name="search" id="" class="form-control border-0" placeholder="Search your mail" size="70"> 
                <!-- <input type="submit" value="" class="btn btn-dark"> -->
                <button class="btn btn-dark px-4"><i class="bi bi-search"></i></button>
            </div>
        </form>

        <ul class="navbar-nav">
            <?php if(isset($_SESSION['user'])){ ?>
            <li class="nav-item"><a href="" class="nav-link"><?= $user['name']; ?></a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>            
            <?php } else { ?>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="create.php" class="nav-link">Sign Up</a></li>
            
            <?php } ?>
            
        </ul>
        
    </div>
</nav>