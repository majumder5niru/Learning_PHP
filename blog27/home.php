<?php
include 'fontendClass/fontend.php';
include 'functions/toUppercase_function.php';
$fontend_object=new Fontend;
$email="";
$password="";
//check email validation
if(isset($_POST["email"]) && $_POST["email"]!=""){
    $email=mysqli_real_escape_string($fontend_object->conn, $_POST['email']);
}
//check password validation
if(isset($_POST["password"]) && $_POST["password"]!=""){
    $password=mysqli_real_escape_string($fontend_object->conn, $_POST['password']);
}
//call checkLogin function for user check
if($email!="" && $password!=""){
    if($fontend_object->checkLogin($email,$password)){
        Header("Location: postpage.php");
    }
    else{
        echo "<script>alert('Email or Password mismatch.')</script>";
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!--for read more option-->
    <!--<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>-->
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var maxLength = 200;
            $(".show-read-more").each(function(){
                var myStr = $(this).text();
                if($.trim(myStr).length > maxLength){
                    var newStr = myStr.substring(0, maxLength);
                    var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                    $(this).empty().html(newStr);
                    $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
                    $(this).append('<span class="more-text">' + removedStr + '</span>');
                }
            });
            $(".read-more").click(function(){
                $(this).siblings(".more-text").contents().unwrap();
                $(this).remove();

            });
        });
    </script>
    <!-- initially author email will be hidden after click it will be displayed
    <script>
    function toggle(id) {
            var state = document.getElementById(id).style.display;
            if (state == 'block') {
                document.getElementById(id).style.display = 'none';
            } else {
                document.getElementById(id).style.display = 'block';
            }
        }
-->
    <!--for read more-->
    <style type="text/css">
        .show-read-more .more-text{
            display: none;
        }
    </style>
</head>
<body>
<div class="container" style="background-color: #5f9ea0">
    <?php include 'header/public/header.php'?>
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <div class="well">
                <h1 class="text-center login-title">Log in</h1><br>
                <div class="account-wall">
                    <form class="form-signin" action="home.php" method="post">
                        <input type="text" class="form-control" name="email" placeholder="Email or username" required autofocus><br>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <label class="checkbox pull-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="remember" value="rememberme">Remember me</label>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                    </form>
                </div>
                <ul class="nav nav-tabs nav-stacked" role="tablist">
                    <li role="presentation" align="center"><a href="registration.php" aria-controls="registration" align="center" role="tab" data-toggle="tab"><b align="center">&nbsp&nbsp&nbsp&nbspCreate new account</b></b></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="well">
                <h2 align="center"> All public posts</h2>
            </div>
            <?php
            $posts=$fontend_object->publicPosts();
            if($posts->num_rows>0) {
                while ($row = $posts->fetch_assoc()) {
            ?>
                <div class="well">
                    <h2 style="" class="form-control">Category:<b><?php echo toUpperCase($row['category_name']); ?></b></h2>
                    <h2 style="" class="form-control">Author:<b><?php echo $row['name']; ?></b></h2>
                    <h2 style="" class="form-control">Title:<b><?php echo $row['post_title']; ?></b> &nbsp;&nbsp;Written on &nbsp;<?php echo $row['posting_time']; ?> </h2>
                    <h3>Description</h3>
                    <div class="well show-read-more"><?php echo nl2br($row['post_description']); ?></div>
                </div>
        <?php
                }
            }
            else{ ?>
                <!--echo "<script>alert('No post for selected category.')</script>";-->
                <div class="well">
                    <h3 align="center">No public post </h3>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="well">
                <h3 align="text" style="color: #0085a1">List of categories</h3>
                <?php
                $categories=$fontend_object->getCategory();
                if($categories->num_rows>0) {
                    while ($row = $categories->fetch_assoc()) {
                        ?>
                        <a href="category_wise_posts.php?id=<?php echo $row["category_id"]; ?>" class="form-control"> <?php echo $row["category_name"]; ?> <a>
                        <?php
                        }
                        }
                        ?>
            </div>
            <div>
                <div class="well">
                    <h3 align="text">List of authors</h3>
                    <?php
                    $authors=$fontend_object->authorList();
                    if($authors->num_rows>0) {
                        while ($row = $authors->fetch_assoc()) {
                            ?>
                            <a href="author_posts.php?id=<?php echo $row["user_id"]; ?>" class="form-control" title="<?php echo $row['email'];?>"> <?php echo $row["name"]; ?> <a>
                        <?php
                        }
                    }
                    ?>
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