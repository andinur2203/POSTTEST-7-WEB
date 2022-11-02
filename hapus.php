<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db, 
        "SELECT * FROM booking_tiket WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    $result = mysqli_query($db, 
        "DELETE FROM booking_tiket WHERE id='$id'");

    if($result){
        unlink("gambar/{$row['dokumen']}");
        echo 'Terhapus';
        header("Location:tampil.php");
    } else {
        echo "Gagal Terkirim";
    }
}