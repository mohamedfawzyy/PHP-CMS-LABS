<?php
    require "./layouts/header.php";
    require "./config.php";
    if($_POST){
        $userName= empty($_POST['name'])? " " : $_POST['name'];
        $userEmail= empty($_POST['email'])? " " : $_POST['email'];
        $userGender= isset($_POST['gender'])? $_POST['gender'] : "M";
        $isagree= isset($_POST['isagree'])?"yes":"No";
        echo("$userName --- $userEmail --  $userGender -- $isagree");
        $sql = "INSERT INTO users (name , email , gender , MailStatus) VALUES ('$userName', '$userEmail', '$userGender' ,'$isagree')";
        $result=mysqli_query($conn, $sql);
        if(!$result){
            echo "<div class='alert alert-danger'>Something error when seeding data your data in  Data Base</div>";
        }else{
            header("location: index.php");
        }
    }
?>

 <div class="container">
        <form action="" method="post" class="col-6 offset-3 alert alert-primary text-black mt-5">
            <h1 class="text-center alert alert-success">User Register Form</h1>
                <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                        </div>
                </div>
                <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                        </div>
                </div>
               
              
                <div class="row mb-3 align-items-center">
                        <label  class="col-sm-2 col-form-label">Gender<span>*</span></label>
                        <div class="col-sm-10">
                                <input class="form-check-input" type="radio" name="gender" id="Male" value="M">
                                <label class="form-check-label" for="Male">
                                   Male
                                </label>
                                <input  class="form-check-input" type="radio" name="gender" id="Female" value="F">
                                <label class="form-check-label" for="Female">
                                   Female
                                </label>
                        </div>
                </div>
                <div class="row mb-3 align-items-center">
                        
                        <div class="col-sm-2">
                        <input class="form-check-input" type="checkbox" name="isagree" value="true" id="agree" >
                        </div>
                        <label for="agree" class="col-sm-10 col-form-label">Receive E-Mails from us.</label>
                </div>
                <button type="submit" class="btn btn-primary">sumbit</button>
                <a href="./index.php" class="btn btn-secondary">Back</a>
        </form>
</div>

<?php 
require "./layouts/footer.php";
?>