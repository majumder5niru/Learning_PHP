<?php
include 'backend/backend.php';
$backend_object=new Backend;
include 'authentication/authentication.php';
$post_id=(int)$_REQUEST['id'];
$title="";
$category_id="";
$description="";
if(isset($_POST["title"]) && $_POST["title"]!=""){
    $title=$_POST["title"];
}
if(isset($_POST["category_id"]) && $_POST["category_id"]!=""){
    $category_id=$_POST["category_id"];
}
if(isset($_POST["description"]) && $_POST["description"]!=""){
    $description=$_POST["description"];
}
if($title!="" && $category_id!="" && $description!="") {
    $category_id=(int)$_POST["category_id"];
    $privacy=$_POST['privacy'];
    echo $post_id;
    $backend_object->updatePost($title,$description,$category_id,$privacy,$post_id);
    Header("Location: postpage.php");
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<div class="container" style="background-color: #5f9ea0">
    <?php include 'header/private/header.php'?>
    <div class="row">
        <div class="col-md-2" style="background-color: #c1e2b3">
        </div>
        <div class="col-md-8">
            <div class="well">
                <h1 class="text-center login-title">Previous post</h1><br>
                <div class="account-wall">
                    <form class="form-signin" action="update.php?id=<?php echo $post_id;?>" method="post">
                        <?php
                        $row=$backend_object->postDetail($post_id);
                        ?>
                        <h3 >Title</h3>
                        <input align="center" type="text" class="form-control" name="title" title="Title" value="<?php echo $row['post_title'] ?>" required>
                        <div class="form-group">
                            <label><b>Select category</b></label>
                            <select name="category_id" title="Category" class="form-control">
                                <?php
                                $categories=$backend_object->getCategory();
                                if($categories->num_rows>0) {
                                    while ($rows = $categories->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $rows["category_id"]; ?>" <?php if($rows['category_id']==$row['category_id']) echo "selected"; ?>> <?php echo $rows["category_name"]; ?> </option>
                                    <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <h3>Description</h3>
                        <textarea title="description" class="form-control" rows="15" cols="100" name="description" required>
                            <?php echo $row['post_description'] ?>
                        </textarea>
                        <input type="radio" name="privacy" value="private" checked="checked">Private <input type="radio" name="privacy" value="public">Public
                        <div class="form-group">
                            <input type="submit" name="submit" value="Save update" class="btn btn-lg btn-success">
                        </div>
                    </form>
                    <br><br>
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