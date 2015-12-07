<?php
include 'backend/backend.php';
$backend_object=new Backend;
include 'authentication/authentication.php';
$title = "";
$category = "";
$description = "";
$description_error = "";
$style = "";
if(isset($_GET['submit'])&& $_GET['submit']!="") {
    if (isset($_GET["title"]) && $_GET["title"] != "") {
        $title = $_GET["title"];
    }
    if (isset($_GET["category_id"]) && $_GET["category_id"] != "") {
        $category_id = (int)$_GET["category_id"];
    }
    if (!isset($_GET["description"]) || trim($_GET["description"]) == "") {
        $description_error = "Description field can not be empty.";
        $style = "error";
    } else {
        $description = trim($_GET["description"]);
    }
    //insert post information
    if ($title != "" && $category_id != "" && $description != "") {
        $privacy = $_GET['privacy'];
        $user_id = $backend_object->getUserid($password);
        $backend_object->insertPost($user_id, $category_id, $title, $description, $privacy);
    }
}
?>
<html>
<head>
    <title> Blog page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <style>
        .error{
            background-color: red;
            color: #ffffff;
        }
    </style>
</head>
<body>
<div class="container" style="background-color: #5f9ea0">
    <?php include 'header/private/header.php'?>
    <div class="row">
        <div class="col-md-4">
            <h3 align="center"> My all posts</h3>
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Delete</th>
                    <th>Update</th>
                <tr>

                <?php
                $posts=$backend_object->allPost($password);
                if($posts->num_rows>0) {
                    while ($row = $posts->fetch_assoc()) {  ?>
                        <tr>
                            <td><a data-toggle="pill" href="singlepost.php?id=<?php echo $row['post_id'];?>" style="color: #ffffff"> <?php echo $row['post_title'];?></a></td> <td><a href="delete.php?id=<?php echo $row['post_id'];?>" style="color: #ffffff;"> Delete</a></td> <td><a href="update.php?id=<?php echo $row['post_id'];?>" style="color: #ffffff;"> Update</a></td></tr><br>
                        </tr>
                    <?php
                    }
                }
                    else{?>
                        <tr>
                            <td></td>
                            <td><b style="color: #ffffff;">No posts</b></td>
                            <td></td>
                        </tr>
                 <?php
                    }
                ?>

            </table>
        </div>
        <div class="col-md-8">
            <div class="well">
                <h1 class="text-center login-title">CREATE NEW BLOG</h1><br>
                <div class="account-wall">
                    <form class="form-signin" action="postpage.php" method="get">
                        <div class="form-group">
                            <label for="title"><b>Title</b></label>
                            <input align="center" type="text" class="form-control" name="title" title="Title" placeholder="Enter title" value="<?php echo $title ?>" size="70px" required autofocus>
                        </div>
                        <div class="form-group">
                            <label><b>Select category</b></label>
                            <select name="category_id" title="Category" class="form-control">
                                <?php
                                $categories=$backend_object->getCategory();
                                if($categories->num_rows>0) {
                                    while ($row = $categories->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $row["category_id"]; ?>"> <?php echo $row["category_name"]; ?> </option>
                                    <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>Write description</b></label>
                            <span class="<?php echo $style; ?>"><?php echo $description_error; ?></span>
                            <textarea title="Description" class="form-control" rows="15" name="description" required>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="privacy" value="private" checked="checked">Private <input type="radio" name="privacy" value="public">Public
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Create Post" class="btn btn-lg btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <?php include 'footer/footer.php';?>
            </div>
        </div>
    </div>
</div>
</body>
</html>