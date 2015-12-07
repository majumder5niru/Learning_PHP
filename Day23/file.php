<?php

   if(isset($_FILES['file'])){
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type']; 
    $file_ext = strtolower(end(explode('.',$_FILES['file']['name'])));    
    $extensions = array("html","php","txt"); 		
    if(in_array($file_ext,$extensions )=== false)
    {
        echo "File extension problems, try only .html, .php, .txt extensions";
    }		
    else 
    {
        move_uploaded_file($file_tmp,"assignments/".$file_name);
        echo "File Uploaded Successfully";
    }
}

?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" />
    <input type="submit"/>
</form>