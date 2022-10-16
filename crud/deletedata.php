<?php
    include 'connect.php';

    $no = $_GET['no'];

    $sql ='DELETE FROM listrdr WHERE no = "'.$no.'"';

    $result = mysqli_query($conn, $sql);  

    if ($result){
        header('Location: ../home.php');
    }else {
        echo('Deleted Failed');
    }
?>
