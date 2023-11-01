<?php
require "header.php";
session_start();

$username= isset($_POST["username"]) ? $_POST["username"] : null;
$password= isset($_POST["password"]) ? $_POST["password"] : null;

$error="";
if(isset($_POST["submit"])){
    
    if(empty($username)|| empty($password)){
        $error="<div class='alert alert-danger'>لازىملىق جايلارنى تولدۇرۇڭ</div>";
    }else{  
     echo $username;
            $sql= $db->prepare("SELECT `username`, `password` FROM `registration` WHERE PASSWORD= '".md5($password)."' and username='".$username."';");
          
            $sql-> execute();  
            $result = $sql->fetch(PDO::FETCH_ASSOC);          
            if ($result) {
        // User authentication successful
        $_SESSION["username"] = $username;
        $error = "<div class='alert alert-success'>مۇۋەپپەقىيەتلىك قىستۇرۇلدى</div>";
        header("Location: dashboard.php"); // Redirect user to another page
         
    } else {
        $error = "<div class='alert alert-danger'>User not found or password is incorrect</div>";
    }
    }
}   
?>
<div id="auth">

        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-5 col-12 ">
                <div id="auth-left ">
                   
                    <h1 class="auth-title">كىرىش</h1>
                    <p class="auth-subtitle mb-5">تىزىملاتقاندا كىرگۈزگەن سانلىق مەلۇماتلىرىڭىز بىلەن كىرىڭ</p>
        
                    <form method="post"  enctype="multipart/form-data">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" class="form-control form-control-xl" placeholder="ئىشلەتكۈچى ئىسمى">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="پارولى">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                        <?php  echo $error;?>
                        </div>
                        
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5"name="submit" type="submit">كىرىش</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">ھېساباتىڭىز يوقمۇ؟ <a href="registration.php" 
                        class="font-bold">تىزىملىتىڭ</a>.</p>                        
                    </div>
                </div>
            </div>
           
        </div>
        
            </div>
<?php 
require "footer.php"?>