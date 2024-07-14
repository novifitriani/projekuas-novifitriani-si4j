<?php
require_once "./koneksi.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $nmentor=$_POST['nmentor'];
    $kls=$_POST['kls'];
    $mapel=$_POST['mapel'];

    $sqlsavementor="INSERT INTO tbl_mentor VALUES
    ('$nmentor','$kls','$mapel')";

    if(mysqli_query($koneksi,$sqlsavementor)){
        echo "<script> alert('Data Sudah disimpan');
        window.location.assign('index.php?page=mentor');</script>";
    }
}

