<?php
include 'fontendClass/fontend.php';
$fontend_object=new Fontend;
$category_id=(int)$_REQUEST['id'];
?>
<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!--for read more option-->
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
    <!--for read more-->
    <style type="text/css">
        .show-read-more .more-text{
            display: none;
        }
    </style>
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
                <li class="active"><a href="aboutus.php">About us</a></li>
                <li class="active"><a href="#">Help</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="well"><h2 align="center"> <?php echo $fontend_object->getCategoryname($category_id) ?> </h2></div>
            <?php
            $posts=$fontend_object->getCategoryposts($category_id);
            if($posts->num_rows>0) {
                while ($row = $posts->fetch_assoc()) {
                    ?>
                    <div class="well">
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
                <h3 align="center">No post for selected category. </h3>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="col-md-3">
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