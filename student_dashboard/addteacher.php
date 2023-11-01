<?php
require "header.php";

require "navBar.php";


error_reporting(E_ALL);
ini_set('display_errors', '1');

$error = "";

if (isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
    $class = isset($_POST['class']) ? $_POST['class'] : null;
    
    if (empty($name)||empty($lastname)||empty($class)) {
     
        $error = "<div class='alert alert-danger'>(*) Please fill all the required areas</div>";
    }else {
    
        $sql = $db->prepare("INSERT INTO  teachers (Name,lastName,id_class)VALUES(?,?,?)");
        $sql->execute([ $name,$lastname,$class]);
        $error = "<div class='alert alert-success'>Inserted Successfully</div>";
        header("location: teacher.php");
    }

}

?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5 ">
                <div class="card-header d-flex align-items-center justify-content-center">
                    <h4 class="card-title">add teacher</h4>
                </div>
                <hr>
                <div class="card-content">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">First Name</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="name"
                                           >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="last-name-vertical">Last Name</label>
                                        <input type="text" id="last-name-vertical" class="form-control" name="lastname"
                                            placeholder="last Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="birth-vertical">class</label>
                                        <input type="text" id="birth-vertical" class="form-control" name="class"
                                           >
                                    </div>
                                </div>
                            
                             
                                
                                <div class="col-md-12">
                                    <?php echo $error; ?>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Add</button>
                                    <a type="button" href="teacher.php" class="btn btn-light-secondary me-1 mb-1">go
                                        back </a>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>



<?php
require "footer.php";
?>