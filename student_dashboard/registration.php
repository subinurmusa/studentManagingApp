<?php
require "header.php";
session_start();

$username = isset($_POST["username"]) ? $_POST["username"] : null;
$password = isset($_POST["password"]) ? $_POST["password"] : null;
$password_con = isset($_POST["password_con"]) ? $_POST["password_con"] : null;
$email = isset($_POST["email"]) ? $_POST["email"] : null;
$error = "";

if (isset($_POST["submit"])) {
    $sqlf = $db->prepare("SELECT * FROM registration WHERE   username=  "." '".$username."'  ;");
    $sqlf->execute();
    $result = $sqlf->fetch(PDO::FETCH_ASSOC);
    
    if($result== null){// if it's empty thers is no user like that so you can create that user 
        
        if (empty($username) || empty($password) || empty($email)) {
            $error = "<div class='alert alert-danger'>لازىملىق جايلارنى تولدۇرۇڭ</div>";
    
        } else if ($password_con != $password) {
            $error = "<div class='alert alert-danger'>پارول ۋە جەزملەشتۈرۈش ماس كەلمەيدۇ.</div>";
    
        }  else {
            echo $username."else box in side";
            //add 
            $sql1 = $db->prepare("INSERT INTO `registration`(`username`, `email`, `password`) VALUES (?,?,?)");
            $sql1->execute([$username, $email, md5($password) ]);
            // read 
            $sql = $db->prepare("SELECT `username`, `password` FROM `registration` WHERE PASSWORD= '".md5($password)."' and username='".$username."';");
    
            $sql->execute();
    
            $result1 = $sql->fetch(PDO::FETCH_ASSOC);
            if ($result1) {
                // User authentication successful
                $_SESSION["username"] = $username;
                $error = "<div class='alert alert-success'>مۇۋەپپەقىيەتلىك قىستۇرۇلدى</div>";
                header("Location: dashboard.php"); // Redirect user to another page
    
            } else {
                $error = "<div class='alert alert-danger'>User not found or password is incorrect</div>";
            }
        }

    }else{
        
        $error = "there is already another person with the same name ";
    }
   
  
}
?>
<div id="auth">

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-lg-5 col-12 ">
            <div id="auth-left ">

                <h1 class="auth-title">تىزىملىتىش</h1>
                <p class="auth-subtitle mb-5">ئۇچۇرلىرىڭىزنى توربېكەتكە تىزىملىتىڭ</p>

                <form method="post" enctype="multipart/form-data">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" name="username" class="form-control form-control-xl"
                            placeholder="ئىشلەتكۈچى ئىسمى">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" name="email" class="form-control form-control-xl"
                            placeholder="ئېلېكترونلۇق خەت">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password" class="form-control form-control-xl"
                            placeholder="پارولى">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password_con" class="form-control form-control-xl"
                            placeholder="پارول جەزملەشتۈرۈش">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <?php if ($error != "") {
                            echo $error;
                        }
                        ?>

                    </div>

                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="submit"
                        type="submit">كىرىش</button>
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
require "footer.php" ?>