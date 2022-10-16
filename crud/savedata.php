<?php
    include 'connect.php';

    $id = $_POST['id'];
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $satuthn = $_POST['satuthn'];
    $tigathn = $_POST['tigathn'];

    if (empty($id)){
        $sql = 'INSERT INTO listrdr VALUE ("'.$no.'", "'.$nama.'", "'.$jenis.'", "'.$satuthn.'", "'.$tigathn.'")';
    }
    else {
        $sql = 'UPDATE listrdr SET no="'.$no.'", nama="'.$nama.'", jenis="'.$jenis.'", 
            satuthn="'.$satuthn.'", tigathn="'.$tigathn.'" WHERE no="'.$id.'"';
    }
    

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: ../home.php');
    } else {
        if(empty($id)) 
            echo 'Inserted Failed.';
        else 
            echo 'Updated Failed.';
    }
?>