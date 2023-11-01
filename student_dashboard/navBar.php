<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <div class="navbar-brand d-flex justify-content-around gap-5">
            <span class="text-secondary">
                <?php session_start();
                if ($_SESSION["username"] != null) {
                    echo $_SESSION["username"];
                } else {
                    header("Location: login.php"); 
                }

                ?>
            </span>
            <span class="fw-bolder text-primary">
                ئوقۇغۇچى باشقۇرۇش سىستېمىسى
            </span>
        </div>
        <?php $url=$_SERVER["SCRIPT_NAME"];
               $url2= basename($url);
               ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link <?php echo $b= $url2=="student.php" ? "text-primary" :"" ?> "  href="student.php">students</a></li>
                <li class="nav-item"><a class="nav-link   <?php echo $b= $url2=="teacher.php" ? "text-primary" :"" ?>" href="teacher.php">teachers</a></li>
                <li class="nav-item"><a class="nav-link   <?php echo $b= $url2=="lesson.php" ? "text-primary" :"" ?>" href="lesson.php">lessons</a></li>
                <li class="nav-item"><a class="nav-link   <?php echo $b= $url2=="homework.php" ? "text-primary" :"" ?>" href="homework.php">homeworks</a></li>
                <li class="nav-item"><a class="nav-link   <?php echo $b= $url2=="attendance.php" ? "text-primary" :"" ?>" href="attendance.php">attendance</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d-flex gap-2" href="#"> <i class="bi bi-person"></i><?php echo $_SESSION["username"];?></a>
                        <a class="dropdown-item d-flex gap-2" href="#"> <i class="bi bi-gear-wide-connected"></i></i>Settings</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>