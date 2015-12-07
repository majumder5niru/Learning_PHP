<?php
include "backend/backend.php";
$backend_object=new Backend;
include 'authentication/authentication.php';
$category_error="";
if(isset($_POST['category'])) {
    $category_name = $backend_object->test_input($_POST["category"]);
    if (!preg_match("/^[a-zA-Z ]*[0-9]*[a-zA-Z ]*[0-9]*$/",$category_name)) {
        $category_error= "Only alphanumeric characters and white space allowed";
        $style="error";
    }
    else {
        $style="success";
        if($backend_object->checkCategory(toLowerCase($category_name))){
            $backend_object->addCategory($category_name);
            echo "<script>alert('Category is added successfully.')</script>";
        }
        else{
            echo "<script>alert('Category already exits.')</script>";
        }
    }
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
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
<body>
<div class="container" style="background-color: #5f9ea0">
    <?php include 'header/private/header.php'?>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form action="addcategory.php" method="post">
                <span class="error_text" name="erorr"><?php echo $category_error;?></span>
                <input type="text" class="form-control" class="<?php echo $style;?>" name="category" placeholder="Enter category" required>
                <button type="submit" class="btn btn-primary" > Add category</button>
            </form>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php include 'footer/footer.php';?>
        </div>
    </div>
</div>
</body>
</html>