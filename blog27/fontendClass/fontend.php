<?php
class Fontend{
    public $conn;
    //initialization of class constructor
    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "blog";
        //create connection
        $this->conn = new mysqli($servername,$username,$password,$db);
        //check connection
        if($this->conn->connect_error)
        {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    //insert registration information
    public function insertInto($name,$email,$password){
        $password=md5($password);
        $sql="select * from user_registration where password='$password'";
        $account=$this->conn->query($sql);
        if($account->num_rows==0) {
            $sql = "INSERT INTO user_registration(name,email,password) VALUES('$name','$email','$password')";
            $this->conn->query($sql);
            session_start();
            //set session variable
            $_SESSION['name'] =$name;
            $_SESSION['password']=$password;
            Header("Location: postpage.php");
        }
        else{
            return "<script>alert('Account with same password already exit.You have to try with another password.')</script>";
        }
    }
    //check for login
    public function  checkLogin($email,$password){
        $password=md5($password);
        $sql = "select name,email,password from user_registration where email='$email' AND password='$password'";
        $valid=$this->conn->query($sql);
        if($valid->num_rows==1){
            $col=$valid->fetch_assoc();
            //start session
            session_start();
            //set session variable
            $_SESSION['name'] =$col['name'];
            $_SESSION['password']=$col['password'];
            //set cookie if remember me checked
            if(isset($_POST['remember']) && $_POST['remember']==true){
                setcookie('name',$col['name'],time()+3600);
                setcookie('password',$col['password'],time()+3600);;
            }
            return 1;
        }
        else{
            return 0;
        }
    }
    //extraction of categories
    public function getCategory(){

        $sql="select category_id,category_name from post_category order by category_name ASC ";
        $categories=$this->conn->query($sql);
        return $categories;
    }
    //get author list
    public function authorList(){
        $sql="select user_id,name,email from user_registration order by name ASC ";
        $authors=$this->conn->query($sql);
        return $authors;
    }
    //get category name
    public function getCategoryname($category_id){
        $sql="select category_name from post_category where category_id=$category_id";
        $category_name=$this->conn->query($sql);
        $col=$category_name->fetch_assoc();
        $category_name = $col['category_name'];
        return $category_name;
    }
    //get category wise all posts
    public function getCategoryposts($category_id){
        $sql="select name,post_title,category_name,post_description,posting_time from user_registration,post,post_category where user_registration.user_id=post.user_id and post.category_id=post_category.category_id and post_category.category_id=$category_id and privacy='public' order by posting_time DESC";
        $posts=$this->conn->query($sql);
        return $posts;
    }
    //get all public posts
    public function publicPosts(){
        $sql="select name,post_title,category_name,post_description,posting_time from user_registration,post,post_category where user_registration.user_id=post.user_id and post.category_id=post_category.category_id and privacy='public' order by posting_time DESC";
        $posts=$this->conn->query($sql);
        return $posts;
    }
    //get author name
    public function authorName($user_id){
        $sql="select name from user_registration where user_id=$user_id";
        $author_name=$this->conn->query($sql);
        $col=$author_name->fetch_assoc();
        $author_name = $col['name'];
        return $author_name;
    }
    //get author posts
    public function authorPosts($user_id){
        $sql="select post_title,category_name,post_description,posting_time from post,post_category where post.category_id=post_category.category_id and privacy='public' and user_id=$user_id order by posting_time DESC";
        $posts=$this->conn->query($sql);
        return $posts;
    }
    //close database connection
    public function close()
    {
        $this->conn->close();
    }
}
?>