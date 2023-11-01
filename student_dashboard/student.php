<?php
require "header.php";
$del=isset($_GET["del"])? $_GET["del"]: null;
if(!empty($del)){
    $sql= $db-> prepare("DELETE FROM students WHERE id = ?");
    $sql -> execute([$del]);
}
?>
<?php
require "navBar.php";






?>


<style>
    .table {
        border-spacing: 0 50px;
        border-collapse: separate;

    }
</style>

<script src="assets/static/js/initTheme.js"></script>
<div id="app">
    <div id="sidebar">

    </div>
    <div id="main">


        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>All Students Info </h3>
                        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Magnam, enim dignissimos? Ratione obcaecati est quos, deleniti dolorum eveniet inventore.
                        </p>
                    </div>

                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">
                            student Data
                        </h5>
                        <a href="addStudent.php" class="btn btn-secondary rounded text-white fs-4">
                            Add Student
                        </a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped " id="table1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>LastName</th>
                                        <th>date Of Birth</th>
                                        <th>ID Number</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>PhoneNumber</th>
                                        <th>Photo</th>
                                        <th>settings</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sql = $db->prepare("select * from students ");
                                    $sql->execute();

                                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr class=" align-items-center">
                                            <td>
                                                <?php echo $row["name"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["lastName"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["date_of_birth"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["id_number"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["email"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["country"] ?>


                                            </td>
                                            <td>
                                                <?php echo $row["phoneNumber"]; ?>
                                            </td>
                                            <td>
                                                <div class=" d-flex align-items-center">
                                                    <img src="photos/<?php echo $row["photo"]; ?>"
                                                        class="rounded-circle border border-secondary border-2"
                                                        style="width: 50px; height: 50px" alt="foto">
                                                </div>
                                            </td>
                                            <td class="d-flex gap-2 align-items-center justify-content-center"
                                                height="70px">
                                                <a href="editStudent.php? id=<?php echo $row["id"]; ?>"
                                                    class="btn btn-secondary d-flex ">
                                                    <div class=" text-center"> <i class="bi bi-pencil-square"></i> </div>
                                                </a>
                                                <a onclick="return confirm('are you sure you want to delete - <?php echo $row['name'] . ' ' . $row['lastName'] ?>')"
                                                    href="student.php?del=<?php echo $row['id']; ?>"
                                                    class="btn btn-danger d-flex ">
                                                    <div class=" text-center"> <i class="bi bi-trash"></i> </div>
                                                </a>

                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </section>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2023 &copy; Mazer</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                        by <a href="https://saugi.me">Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>


<?php
require "footer.php";

?>