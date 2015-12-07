<?php
include 'backend/backend.php';
$backend_object=new Backend;
$post_id=(int)$_REQUEST['id'];
$col=$backend_object->postDetail($post_id);
$title=$col['post_title'];
$category=$col['category_name'];
$description=$col['post_description'];
$posting_time=$col['posting_time'];
?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container" style="background-color: #5f9ea0" >
    <div class="row">
        <div class="col-md-12">
            <img src="Image/final.jpg" style="width:100%;height:200px;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills nav-justified" style="width:100%;height:60px;">
                <li class="active"><a href="home.php">Home</a></li>
                <li class="active"><a href="postpage.php">Create post</a></li>
                <li class="active"><a href="addcategory.php">Add category</a></li>
                <li class="active"><a href="aboutus.php">About Us</a></li>
                <li class="active"><a href="#">Help</a></li>
                <li class="active"><a href="logout.php"> &nbsp;Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="well">
                <h3 style="" class="form-control">Title:<b>&nbsp;<?php echo $title; ?></b>&nbsp;Written on&nbsp;<?php echo $posting_time; ?></h3>
                <h3 style="" class="form-control">Category:<b>&nbsp;<?php echo $category; ?></b></h3>
                <h3 class="form-control">Description</h3>
                <div class=well >
                    <?php echo $description; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <?php include 'footer/footer.php';?>
        </div>
    </div>
</div>
</body>
</html>
