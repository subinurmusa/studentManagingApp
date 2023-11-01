<?php
require "header.php";

require "navBar.php";


error_reporting(E_ALL);
ini_set('display_errors', '1');

$error = "";
$lessonid=isset($_GET["id"])? $_GET["id"]: null;
$sqld = $db-> prepare("SELECT * FROM lessons where id = ? ");
$sqld-> execute([$lessonid]);
$lessons =$sqld->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {
    $subject = isset($_POST['subject']) ? $_POST['subject'] : null;
    $lessonday = isset($_POST['lessonday']) ? $_POST['lessonday'] : null;
  
    $teacherName = isset($_POST['teacherName']) ? $_POST['teacherName'] : null;
    if (empty($subject)||$lessonday==0||$teacherName==0) {
     
        $error = "<div class='alert alert-danger'>(*) Please fill all the required areas</div>";
        
    }else {
    
        $sql = $db->prepare("UPDATE lessons SET  lesson_subject=? , lesson_day=?, assigned_teacher_id=? where id = ? ");
        $sql->execute([ $subject,$lessonday,$teacherName,$lessonid]);
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
                    <h4 class="card-title">edit  lesson</h4>
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
                                         value="<?php echo  $lessons["lesson_subject"]?>"  >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="last-name-vertical">lesson day</label>
                                       <select name="lessonday" class="form-select" >
                                       <option value="0">Select Day</option>
                                        <option value="Monday"  <?php echo $day=  $lessons["lesson_day"] =="Monday"? "selected":"" ?>>Monday</option>
                                        <option value="Tuesday"  <?php echo $day=  $lessons["lesson_day"] =="Tuesday"? "selected":"" ?>>Tuesday</option>
                                        <option value="Wednesday"  <?php echo $day=  $lessons["lesson_day"] =="Wednesday"? "selected":"" ?>>Wednesday</option>
                                        <option value="Thursday"  <?php echo $day=  $lessons["lesson_day"] =="Thursday"? "selected":"" ?>>Thursday</option>
                                        <option value="Friday"  <?php echo $day=  $lessons["lesson_day"] =="Friday"? "selected":"" ?>>Friday</option>
                                        <option value="Saturday"  <?php echo $day=  $lessons["lesson_day"] =="Saturday"? "selected":"" ?>>Saturday</option>
                                        <option value="Sunday"  <?php echo $day=  $lessons["lesson_day"] =="Sunday"? "selected":"" ?>>Sunday</option>
                                       
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
                                            $teachername= $tname["Name"]==$lessons["assigned_teacher_id"]?"selected":"";
                                            echo '<option value="'.$tname["Name"].'" '.$teachername.'>'.$tname["Name"].'</option>';
                                                
                                          }
                                            ?>
                                            
                                           </select>
                                    </div>
                                </div>
                              
                                
                                                           
                                <div class="col-md-12">
                                    <?php echo $error; ?>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Edit</button>
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