<?php
require "header.php";
$del = isset($_GET["del"]) ? $_GET["del"] : null;
if (!empty($del)) {
    $sql = $db->prepare("DELETE FROM homeworks WHERE id = ?");
    $sql->execute([$del]);
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
  
    <div id="main">


        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>All homeworks Info </h3>
                        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            tur adipisicing elit. Accusamus nihil nesciunt perspiciatis labore. Iure delectus obcaecati
                            excepturi tenetur fugiat similique recusandae aliquam? Eum placeat nostrum autem illum,
                            pariatur nemo beatae!
                        </p>
                    </div>

                </div>
            </div>
            <section class="section">
                <div class="row" id="basic-table">
                    <div class="col-12 col-md-12">
                        <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">
                            homework
                        </h5>
                        <a href="addhomework.php" class="btn btn-secondary rounded text-white fs-4">
                           Assign homework
                        </a>
                    </div>
                            <div class="card-content mt-0 pt-0">
                                <div class="card-body">

                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-lg">
                                            <thead>
                                                <tr >
                                                    <th>Student Name</th>
                                                    <th>Done</th>
                                                    <th>homework</th>
                                                    <th>Grade</th>
                                                    <th>Created time</th>
                                                    <th>Settings</th>


                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $sql = $db->prepare("select * from homeworks ");
                                                $sql->execute();

                                                while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {

                                                 ?>


                                                    <tr>
                                                        <td class="text-bold-500">
                                                            <?php echo $row["studentName"] ?>
                                                        </td>

                                                        <td class="text-bold-500">
                                                            <?php
                                                            if ($row["done"] == 1) {
                                                                echo '<span class="bg-success text-white rounded p-1"> done</span>';
                                                            } else {
                                                                echo '<span class="bg-secondary text-white rounded p-1"> undone</span>';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td >
                                                          <div class=" text-break">
                                                          <?php echo $row["hw_description"]; ?>
                                                          </div>
                                                        
                                                            
                                                        </td>
                                                        <td>
                                                            <?php echo $row["grade"]; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["added_time"] ;?>
                                                        </td>
                                                        <td >
                                                            <div class="d-flex gap-2 align-items-center  justify-content-center">
                                                            <a href="edithomework.php? id=<?php echo $row["id"]; ?>"
                                                    class="btn btn-secondary d-flex ">
                                                    <div class=" text-center"> <i class="bi bi-pencil-square"></i> </div>
                                                </a>
                                                <a onclick="return confirm('are you sure you want to delete - <?php echo $row['studentName']; ?>')"
                                                    href="homework.php?del=<?php echo $row['id']; ?>"
                                                    class="btn btn-danger d-flex ">
                                                    <div class=" text-center"> <i class="bi bi-trash"></i> </div>
                                                </a>
                                                            </div>
                                             

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