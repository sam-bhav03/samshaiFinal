<?php
    session_start();

    include 'includes/db_connection.php';
    $conn = OpenCon();    
    include 'header.php';
    $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';

    include $page . '.php'; //calls in the file with the php extension
    //session_destroy();
    //include 'footer.php';
?>
