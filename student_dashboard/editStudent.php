<?php
require "header.php";

require "navBar.php";


error_reporting(E_ALL);
ini_set('display_errors', '1');

$error = "";
$studentid=isset($_GET["id"])? $_GET["id"]: null;
$sqld = $db-> prepare("SELECT * FROM students where id = ? ");
$sqld-> execute([$studentid]);
$students =$sqld->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
    $birth = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
    $idnum = isset($_POST['idnumber']) ? $_POST['idnumber'] : null;
    $email = isset($_POST['email-id']) ? $_POST['email-id'] : null;
    $city = isset($_POST['select']) ? $_POST['select'] : null;
    $phone = isset($_POST['phonenum']) ? $_POST['phonenum'] : null;
    if (empty($name)||empty($lastname)||empty($email)) {
     
        $error = "<div class='alert alert-danger'>(*) Please fill all the required areas</div>";
    }

    if (!empty($_FILES["photo"]["name"])) {
        $filename = $_FILES["photo"]["name"];
        $tmpname = $_FILES["photo"]["tmp_name"];
        if (move_uploaded_file($tmpname, 'photos/' . $filename)) {
            $photo = $filename;
        } else {
            $photo = "";
        }
        $sql = $db->prepare("UPDATE students SET  name=? , lastName=?, date_of_birth=?, id_number=?, email=?, country=?, photo=?, phoneNumber=? where id = ? ");
        $sql->execute([$name, $lastname, $birth, $idnum, $email, $city, $photo, $phone, $studentid]);
        $error = "<div class='alert alert-success'>Inserted Successfully</div>";
        header("location: student.php");
    } else {
        $sql = $db->prepare("UPDATE students SET  name=? , lastName=?, date_of_birth=?, id_number=?, email=?, country=?, phoneNumber=? where id = ? ");
        $sql->execute([$name, $lastname, $birth, $idnum, $email, $city, $phone, $studentid]);
        $error = "<div class='alert alert-success'>Inserted Successfully</div>";
        header("location: student.php");
    }



}

?>
<script>
    function getcountry() {
        $.ajax({
            type: "GET",
            url: "https://countriesnow.space/api/v0.1/countries/iso",
            dataType: "json",
            success: function (result) {
                console.log(result['data'][3]);


                var jsondata = result["data"];
                for (var i = 0; i < jsondata.length; i++) {
                      var bb=   jsondata[i]["name"]=="<?php echo  $students['country']?>"? "selected":"";
                        $("#country").append("<option value='" + jsondata[i]["name"] + "' "+bb+">" + jsondata[i]["name"] + "</option>");
              
                     

                     }

            }

        });
    };

    $(document).ready(function () {
        getcountry();
    });
</script>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5 ">
                <div class="card-header d-flex align-items-center justify-content-center">
                    <h4 class="card-title">edit  student</h4>
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
                                         value="<?php echo  $students["name"]?>"  >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="last-name-vertical">Last Name</label>
                                        <input type="text" id="last-name-vertical" class="form-control" name="lastname"
                                        value="<?php echo $students["lastName"]?>"  >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="birth-vertical">date of birth</label>
                                        <input type="date" id="birth-vertical" class="form-control" name="birthdate"
                                        value="<?php echo $students["date_of_birth"]?>"    >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="idnum">ID number</label>
                                        <input type="text" id="idnum" class="form-control" name="idnumber"
                                        value="<?php echo $students["id_number"]?>"   >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Email</label>
                                        <input type="email" id="email-id-vertical" class="form-control" name="email-id"
                                        value="<?php echo $students["email"]?>" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="country">city</label>
                                        <select class="form-select" id="country" name="select">
                                            <option value="00" > select country </option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mo">Mobile</label>
                                        <input type="number" id="mo" class="form-control"
                                            name="phonenum"  value="<?php echo $students["phoneNumber"]?>" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="photo-vertical">photo</label>
                                        <input class="form-control" type="file" id="photo-vertical"    name="photo">
                                    </div>
                                </div>
                              
                                <div class="col-md-12">
                                    <?php echo $error; ?>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                                    <a type="button" href="student.php" class="btn btn-light-secondary me-1 mb-1">go
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