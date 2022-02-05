<a href="#insert" data-bs-toggle = 'modal' class="btn btn-outline-danger btn-lg rounded-pill px-3 py-2 ms-3 shadow border-0 mb-3">Compose <i class="bi bi-envelope-plus-fill"></i></a>

<div class="modal fade" id="insert">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">Send Mail</div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" name="to" class="form-control" placeholder="To." id="">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="subject" placeholder="Subject" class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="content" rows="5" class="form-control" placeholder="Write Your Mail"></textarea>
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="send" class="btn btn-success float-end">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="save" value="Save" class="btn btn-secondary">
                    </div>
                </form>

                <?php 
                    if(isset($_POST['send']) || isset($_POST['save'])){
                        $sender_id = $user['id'];
                        $to = $_POST['to'];
                        //finding reciever ID               
                        $query = mysqli_query($connect, "select * from accounts where email='$to'");
                        $receiver = mysqli_fetch_array($query);
                        $receiver_id = $receiver['id'];
                        $title = $_POST['subject'];

                        $content = $_POST['content'];
                        $status = 0;
                        if(isset($_POST['save'])){
                            $status = 1;
                        }
                        
                        $sendMail = mysqli_query($connect,"insert into mails (sender_id,receiver_id,title,content,status) value('$sender_id','$receiver_id','$title','$content','$status')");

                        if($sendMail){
                            echo "<script>window.open('index.php','_self')</script>";
                        }
                    }
                    
                ?>

            </div>
        </div>
    </div>
</div>

<div class="list-group list-group-flush">
    <a href="index.php" class="list-group-item list-group-item-action">Inbox
        <sup class="badge bg-danger rounded-pill text-white" style="font-size: 10px;">
            
            <?php
                $log=$user['id']; 
                $query = mysqli_query($connect,"select * from mails where receiver_id='$log' AND status=0");
                echo mysqli_num_rows($query);
            ?>
        </sup>
    </a>
    <a href="sent.php" class="list-group-item list-group-item-action">Sent Mail
        <sup class="badge bg-danger rounded-pill text-white" style="font-size: 10px;">              
            <?php
                $log=$user['id']; 
                $query = mysqli_query($connect,"select * from mails where sender_id='$log' AND status=0");
                echo mysqli_num_rows($query);
            ?>
        </sup>
    </a>
    <a href="draft.php" class="list-group-item list-group-item-action">Draft
        <sup class="badge bg-danger rounded-pill text-white" style="font-size: 10px;">              
            <?php
                $log=$user['id']; 
                $query = mysqli_query($connect,"select * from mails where sender_id='$log' AND status=1");
                echo mysqli_num_rows($query);
            ?>
        </sup>
    </a>
    <a href="" class="list-group-item list-group-item-action">Trash</a>
    <a href="" class="list-group-item list-group-item-action">Setting</a>
    <a href="logout.php" class="list-group-item list-group-item-action bg-danger text-white">Logout</a>
</div>