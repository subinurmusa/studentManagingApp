<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=student_management;", "root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e;
    }

    error_reporting(-1);
    ini_set( 'display_errors', 1 );
?> 
