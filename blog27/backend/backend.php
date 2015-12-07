<?php
include 'functions/toLowercase_function.php';
class Backend{
    public $conn;
    //initialization of class constructor
    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "blog";
        //create connection
        $this->conn = new mysqli($servername, $username, $password, $db);
        //check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    //remove extra white space
    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //get user id
    public function getUserid($password){
        $sql="select user_id from user_registration where password='$password'";
        $user_id=$this->conn->query($sql);
        $col=$user_id->fetch_assoc();
        $user_id = (int)$col['user_id'];
        return $user_id;
    }
    //insert post
    public  function insertPost($user_id,$category_id,$title,$description,$privacy){
        $sql = "INSERT INTO post (user_id,category_id,post_title,post_description,privacy) VALUES ($user_id,$category_id,'$title','$description','$privacy')";
        $this->conn->query($sql);
    }
    //extraction of categories
    public function getCategory(){
        $sql="select category_id,category_name from post_category order by category_name ASC ";
        $categories=$this->conn->query($sql);
        return $categories;
    }
    //check to whether given category exit or not
    public function checkCategory($category){
        $found=true;
        $sql="select * from post_category";
        $exit_category=$this->conn->query($sql);
        while($rows=$exit_category->fetch_assoc()){
            if(toLowerCase($rows['category_name'])==$category){
                $found=false;
            }
        }
        return $found;
    }
    //add category
    public function addCategory($category){
        $sql = "INSERT INTO post_category (category_name) VALUES ('$category')";
        $this->conn->query($sql);
    }
    //update post
    public function updatePost($title,$description,$category_id,$privacy,$post_id){
        $sql="update post set post_title='$title',post_description='$description',privacy='$privacy',category_id=$category_id where post_id=$post_id";
        $this->conn->query($sql);
        return 1;
    }
    //get post details
    public function postDetail($post_id){
        $sql="select post_title,post_category.category_id as category_id,category_name,post_description,posting_time from post,post_category where post.category_id=post_category.category_id and post_id=$post_id";
        $post=$this->conn->query($sql);
        $row=$post->fetch_assoc();
        return $row;
    }
    //user posts details
    public function allPost($password){
        $sql="select post_id,post_title from post,user_registration where post.user_id=user_registration.user_id and password='$password'";
        $posts=$this->conn->query($sql);
        return $posts;
    }
    //delete post
    public function deletePost($post_id){
        $sql="delete from post where post_id=$post_id";
        $this->conn->query($sql);
    }
    //close database connection
    public function close()
    {
        $this->conn->close();
    }
}