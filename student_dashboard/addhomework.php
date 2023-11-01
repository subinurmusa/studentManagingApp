<?php
require "header.php";

require "navBar.php";


error_reporting(E_ALL);
ini_set('display_errors', '1');

$error = "";

if (isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $homework = isset($_POST['homework']) ? $_POST['homework'] : null;
  
    $done = isset($_POST['done']) ? $_POST['done'] : null;
    $grade = isset($_POST['grade']) ? $_POST['grade'] : null;

    if (empty($name)||empty($homework)||empty($grade)) {
     
        $error = "<div class='alert alert-danger'>(*) Please fill all the required areas</div>";
        
    }else {
    
        $sql = $db->prepare("INSERT INTO `homeworks`( `studentName`, `hw_description`, `done`, `grade`) VALUES(?,?,?,?)");
        $sql->execute([ $name,$homework,$done,$grade]);
        $error = "<div class='alert alert-success'>Inserted Successfully</div>";
        header("location: homework.php");
    }

}


?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5 ">
                <div class="card-header d-flex align-items-center justify-content-center">
                    <h4 class="card-title">Assign homework</h4>
                </div>
                <hr>
                <div class="card-content">
                    <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">student name</label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="name"
                                         >
                                    </div>
                          </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="hwk">homework</label>
                                     <textarea name="homework" class="form-control" id="hwk" >
                                    
                                     </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="birth-vertical"> Done</label>
                                     
                                           <select name="done" class="form-select">
                                            <option value="0" >Undode </option>
                                            <option value="1"> Done </option>
                                           </select>
                                    </div>
                                </div>       
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="birth-vertical"> Grade</label>
                                     
                                        <input type="text" name="grade" class="form-control">
                                         </div>
                                </div>
                                                                           
                                <div class="col-md-12">
                                    <?php echo $error; ?>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">add</button>
                                    <a type="button" href="homework.php" class="btn btn-light-secondary me-1 mb-1">go
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