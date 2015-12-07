<?php
include 'backend/backend.php';
$backend_object=new Backend;
$post_id=(int)$_REQUEST['id'];
$backend_object->deletePost($post_id);
Header("Location: postpage.php");
?>