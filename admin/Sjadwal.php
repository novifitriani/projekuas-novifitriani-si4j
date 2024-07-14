<?php
require_once "./koneksi.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $idjadwal=$_POST['idjadwal'];
    $nama=$_POST['nama'];
    $kls=$_POST['kls'];
    $hari=$_POST['hari'];
    $jam=$_POST['jam'];
    $mapel=$_POST['mapel'];

    $sqlsavejadwal="INSERT INTO tbl_jdwl VALUES
    ('$idjadwal','$nama','$kls','$hari','$jam','$mapel')";

    if(mysqli_query($koneksi,$sqlsavejadwal)){
        echo "<script> alert('Data Sudah disimpan');
        window.location.assign('index.php?page=jadwal');</script>";
    }
}
