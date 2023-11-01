<?php
require "header.php";

require "navBar.php";


error_reporting(E_ALL);
ini_set('display_errors', '1');

$error = "";

if (isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
    $birth = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
    $idnum = isset($_POST['idnumber']) ? $_POST['idnumber'] : null;
    $email = isset($_POST['email-id']) ? $_POST['email-id'] : null;
    $city = isset($_POST['select']) ? $_POST['select'] : null;
    $phone = isset($_POST['phonenum']) ? $_POST['phonenum'] : null;


    if (!empty($_FILES["photo"]["name"])) {
        $filename = $_FILES["photo"]["name"];
        $tmpname = $_FILES["photo"]["tmp_name"];
        if (move_uploaded_file($tmpname, 'photos/' . $filename)) {
            $photo = $filename;
        } else {
            $photo = "";
        }
    } else {
        $photo = "";
    }

    if (empty($name)) {
        echo 1;
        $error = "<div class='alert alert-danger'>(*) Please fill all the required areas</div>";
    } else {
      $sql = $db->prepare("INSERT INTO students (name, lastName, date_of_birth, id_number, email, country, photo, phoneNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute([$name, $lastname, $birth, $idnum, $email, $city, $photo, $phone]);
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


                    $("#country").append("<option value='" + jsondata[i]["name"] + "' >" + jsondata[i]["name"] + "</option>");
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
                    <h4 class="card-title">add student</h4>
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
                                        <label for="birth-vertical">date of birth</label>
                                        <input type="date" id="birth-vertical" class="form-control" name="birthdate"
                                           >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="idnum">ID number</label>
                                        <input type="text" id="idnum" class="form-control" name="idnumber"
                                            >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Email</label>
                                        <input type="email" id="email-id-vertical" class="form-control" name="email-id"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="country">city</label>
                                        <select class="form-select" id="country" name="select">
                                            <option value="00" selecred> select country </option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mo">Mobile</label>
                                        <input type="number" id="mo" class="form-control"
                                            name="phonenum" placeholder="Mobile">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="photo-vertical">photo</label>
                                        <input class="form-control" type="file" id="photo-vertical"  name="photo">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <?php echo $error; ?>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Add</button>
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