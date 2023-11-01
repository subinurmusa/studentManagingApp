<?php
require "header.php";
$del=isset($_GET["del"])? $_GET["del"]: null;
if(!empty($del)){
    $sql= $db-> prepare("DELETE FROM teachers WHERE id = ?");
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
                        <h3>All teachers Info </h3>
                        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Magnam, enim dignissimos? Ratione obcaecati Lorem est quos, deleniti dolorum eveniet inventore.lorem
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nihil nesciunt perspiciatis labore. Iure delectus obcaecati excepturi tenetur fugiat similique recusandae aliquam? Eum placeat nostrum autem illum, pariatur nemo beatae!
                        </p>
                    </div>

                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">
                        teachers Data
                        </h5>
                        <a href="addteacher.php" class="btn btn-secondary rounded text-white fs-4">
                            Add teacher
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
                                        <th>class</th>
                                        <th class=" d-flex justify-content-center">settings </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sql = $db->prepare("select * from teachers ");
                                    $sql->execute();

                                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr class=" align-items-center">
                                            <td>
                                                <?php echo $row["Name"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["lastName"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["id_class"]; ?>
                                            </td>
                                            <td class="d-flex gap-2 align-items-center justify-content-center"
                                                height="70px">
                                                <a href="editteacher.php? id=<?php echo $row["id"]; ?>"
                                                    class="btn btn-secondary d-flex ">
                                                    <div class=" text-center"> <i class="bi bi-pencil-square"></i> </div>
                                                </a>
                                                <a onclick="return confirm('are you sure you want to delete - <?php echo $row['Name'] . ' ' . $row['lastName'] ?>')"
                                                    href="teacher.php?del=<?php echo $row['id']; ?>"
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