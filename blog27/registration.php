<?php
include 'fontendClass/fontend.php';
$name = $email =$password=$confirm_password= "";
$name_error=$email_error="";
$password_error="";
$style="";
//name validation
if(isset($_POST['name'])) {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $name_error= "Only letters and white space allowed";
        $style="error";
    }
    else {
        $style="success";
    }
}
//email validation
if(isset($_POST['email'])){
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
        $style="error";
    }
    else {
        $style="success";
    }
}
//password validation
if(isset($_POST['password'])&& isset($_POST['confirmpassword'])){
    $password_length=strlen($_POST['password']);
    if($password_length>7){
        if($_POST['password']==$_POST['confirmpassword']){
            $password=$_POST['password'];
            $style="success";
        }
        else{
            $password_error="Passwords mismatch.";
            $style="error";
        }
    }
    else {
        $password_error = "Password length must be greater than 8.";
        $style = "error";
    }
}
//calling insertInto function
if($name!="" && $email!="" && $password!=""){
    $account=new Fontend();
    $exist_account=$account->insertInto($name,$email,$password);
    echo $exist_account;
}
//remove extra white space
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .error{
            border-style: solid;
            border-color: red;
        }
        .error_text{
            background-color: red;
            color: #ffffff;
        }
        .success{
            border-style: solid;
            border-color: green;
        }
    </style>
</head>
<body onload="error_text()">
<div class="container" style="background-color: #5f9ea0">
    <?php include 'header/public/header.php'?>
    <div class ="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="well">
                <h2 align="center">Sign Up</h2><br><br>
                <p><span style="color: red;">* required field.</span></p>
                <form action="registration.php" method="post"  class="form-horizontal" role="form" >
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">*Name:</label>
                        <div class="col-sm-10">
                            <input type="name" name="name" class="form-control" class="<?php echo $style; ?>" id="name" value="<?php echo $name; ?>" placeholder="Enter name" autofocus required>
                            <span class="error_text" name="erorr"><?php echo $name_error;?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">*Email:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" class="<?php echo $style; ?>" id="email" value="<?php echo $email; ?>" placeholder="Enter email" required>
                            <span class="error_text" name="erorr"><?php echo $email_error;?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">*Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" class="<?php echo $style; ?>" id="password" value="<?php echo $password; ?>" placeholder="Enter password" required="">
                            <span class="error_text" name="erorr"><?php echo $password_error;?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="confirm_password">*Confirm Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="Re-enter password" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <label align="center"><input type="submit" name="submit" class="btn btn-primary" value="Create account"></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"> </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <?php include 'footer/footer.php';?>
        </div>
    </div>
</div>
</body>
</html>
