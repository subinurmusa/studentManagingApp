<?php
require "header.php";

require "navBar.php";


error_reporting(E_ALL);
ini_set('display_errors', '1');

$error = "";

if (isset($_POST['submit'])) {
   
    $subject = isset($_POST['subject']) ? $_POST['subject'] : null;
    $lessonday = isset($_POST['lessonday']) ? $_POST['lessonday'] : null;
  
    $teacherName = isset($_POST['teacherName']) ? $_POST['teacherName'] : null;

    
    if (empty($subject)||$lessonday==0||$teacherName==0) {
     
        $error = "<div class='alert alert-danger'>(*) Please fill all the required areas</div>";
        
    }else {
    
        $sql = $db->prepare("INSERT INTO  lessons ( `lesson_subject`, `lesson_day`,`assigned_teacher_id`)VALUES(?,?,?)");
        $sql->execute([ $subject,$lessonday,$teacherName]);
        $error = "<div class='alert alert-success'>Inserted Successfully</div>";
        header("location: lesson.php");
    }

}


?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5 ">
                <div class="card-header d-flex align-items-center justify-content-center">
                    <h4 class="card-title">add lesson</h4>
                </div>
                <hr>
                <div class="card-content">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Lesson Subject </label>
                                        <input type="text" id="first-name-vertical" class="form-control" name="subject"
                                           >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="last-name-vertical">lesson day</label>
                                       <select name="lessonday" class="form-select" >
                                       <option value="0">Select Day</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>

                                       </select>
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="birth-vertical">responsible Teacher </label>
                                     
                                           <select name="teacherName" class="form-select">
                                            <option value="0" selected>select teacher </option>
                                            <?php 
                                            $query= $db->prepare("SELECT * FROM teachers");
                                            $query-> execute();
                                          while(  $tname= $query->fetch(PDO::FETCH_ASSOC)){
                                            echo $tname;
                                            echo '<option value="'.$tname["Name"].'">'.$tname["Name"].'</option>';
                                        
                                          }
                                            ?>
                                            
                                           </select>
                                    </div>
                                </div>
                            
                             
                                
                                <div class="col-md-12">
                                    <?php echo $error; ?>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Create </button>
                                    <a type="button" href="lesson.php" class="btn btn-light-secondary me-1 mb-1">go
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