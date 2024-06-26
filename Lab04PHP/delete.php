<?php
include "./layouts/header.php";
require "./config.php";
 $sql = "SELECT * FROM users where id={$_GET['user_id']}";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) == 1) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
 }
 if($_POST){
    $sql = "DELETE From  users  where id={$_GET['user_id']}";
    $result=mysqli_query($conn, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'>Something error when seeding data your data in  Data Base</div>";
    }else{
        header("location: index.php");
    }
}
?>
 <div class="container">
        <form action="" method="POST" class="col-6 offset-3 alert alert-primary text-black mt-5">
            <h1 class="text-center alert alert-danger">Be careful you will delete this User permanently!! </h1>
                <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input type="text" value="<?= isset($row)?"{$row['name']}":""?>" class="form-control" id="name" name="name" readonly>
                        </div>
                </div>
                <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" value="<?= isset($row)?"{$row['email']}":""?>" class="form-control" id="email" name="email" readonly>
                        </div>
                </div>
               
              
                <div class="row mb-3 align-items-center">
                        <label  class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                        <input type="text" value="<?= isset($row)?"{$row['gender']}":""?>" class="form-control" id="gender" name="gender" readonly>
                        </div>
                </div>
                <div class="row mb-3 align-items-center">
                        
                        <div class="col-sm-2">
                        <input class="form-check-input" <?php if(isset($row)){
                            echo $row['MailStatus']=='yes'?"checked":"";
                        }
                        ?> type="checkbox" name="isagree" value="true" id="agree" disabled>
                        </div>
                        <label for="agree" class="col-sm-10 col-form-label">Receive E-Mails from us.</label>
                </div>
                <button type="submit" class="btn btn-danger">Sure Delete</button>
                <a href="./index.php" class="btn btn-secondary">Back</a>
        </form>
</div>


<?php
include "./layouts/footer.php";
?>