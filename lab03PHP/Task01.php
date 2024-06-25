<?php 
    if($_POST){
        $errors=[];
            //validation
        if(empty($_POST['name'])){
            $errors['name']="<div class='alert alert-danger my-2'>Name is Required</div>";
        }
        if(!preg_match("/^[a-zA-Z]{4,30}$/",$_POST['name']) && !empty($_POST['name'])){
            $errors['regex']="<div class='alert alert-danger my-2'>Name must have only characters min 4 characters and max 30 characters</div>";
        }
        if(empty($_POST['email'])){
            $errors['email']="<div class='alert alert-danger my-2'>Email is Required</div>";
        }  
        if(empty($_POST['gender'])){
            $errors['gender']="<div class='alert alert-danger my-2'>Gender is Required</div>";
        }  
        //
        if(empty($errors)){
                $output="";
               if(!isset($_POST['isagree'])){
                $output .= 
                "
                <div class='alert alert-danger my-2'>
                <h5 class='text-danger'>your are not agree with our rules :''(</h5>
                ";
               }else{
                $output .= 
                "
                <div class='alert alert-success my-2'>
                <h5 class='text-danger'>your are agreed with our rules :)</h5>
                ";  
               }
               $output .=
               "
               <ul>
                <li>name: {$_POST["name"]}</li>
                <li>email: {$_POST["email"]}</li>
                <li>group: {$_POST["group"]}</li>
                <li>Details: {$_POST["details"]}</li>
                <li>Details: {$_POST["gender"]}</li>
               ";
               
               if(isset($_POST["courses"])){
                $courses=implode(" ",$_POST["courses"]);
               }else{
                $courses="";
               }
              
              $output.=
              "
              <li>Courses: {$courses}</li>
              </ul>
              ";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<style>
    span{
        color: red;
    }
</style>
<body>
    <div class="container">
        <form action="" method="post" class="col-6 offset-3 alert alert-primary text-black mt-5">
            <h1 class="text-center">CMS:2024</h1>
            <h4 class="text-danger my-2"><span>*</span> is required inputs</h4>
                <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name<span>*</span></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= isset($_POST['name'])?$_POST['name']:"";?>" id="name" name="name">
                        <?php echo isset($errors['name'])?$errors['name']:""; 
                                echo isset($errors['regex'])?$errors['regex']:""; 
                        ?>
                        </div>
                </div>
                <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email<span>*</span></label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?= isset($_POST['email'])?$_POST['email']:"";?>">
                        <?php echo isset($errors['email'])?$errors['email']:""; ?>
                        </div>
                </div>
                <div class="row mb-3">
                        <label for="group" class="col-sm-2 col-form-label">Group</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="group"  value="<?= isset($_POST['group'])?$_POST['group']:"";?>" max=2 min=1 name="group">
                        </div>
                </div>
                <div class="row mb-3">
                        <label for="details" class="col-sm-2 col-form-label">Details</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" name="details" id="details" >
                        <?= isset($_POST['details'])?ltrim($_POST['details']):ltrim("");?>
                        </textarea>
                        </div>
                </div>
                <div class="row mb-3 align-items-center">
                        <label  class="col-sm-2 col-form-label">Gender<span>*</span></label>
                        <div class="col-sm-10">
                                <input <?php if(isset($_POST['gender'])){
                                        echo $_POST['gender']=="Male"?"checked":"";
                                }?> class="form-check-input" type="radio" name="gender" id="Male" value="Male">
                                <label class="form-check-label" for="Male">
                                   Male
                                </label>
                                <input <?php if(isset($_POST['gender'])){
                                        echo $_POST['gender']=="Female"?"checked":"";
                                }?> class="form-check-input" type="radio" name="gender" id="Female" value="Female">
                                <label class="form-check-label" for="Female">
                                   Female
                                </label>
                                <?php echo isset($errors['gender'])?$errors['gender']:""?>
                        </div>
                </div>
                <div class="row mb-3">
                        <label for="courses" class="col-sm-2 col-form-label">Courses</label>
                        <div class="col-sm-10">
                        <select name="courses[]" id="courses" class="from-control" multiple>
                            <option value="php">PHP</option>
                            <option value="js">Java Script</option>
                            <option value="mysql">MySQL</option>
                            <option value="html">HTML</option>
                        </select>
                        </div>
                </div>
                <div class="row mb-3 align-items-center">
                        <label for="agree" class="col-sm-2 col-form-label">Agree</label>
                        <div class="col-sm-10">
                        <input <?= empty($_POST['isagree'])?"":"checked";?> class="form-check-input" type="checkbox" name="isagree" value="true" id="agree" >
                        </div>
                </div>
                <button type="submit" class="btn btn-primary d-block mx-auto">sumbit</button>
                <?= isset($output)?$output:""?>
        </form>

    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>