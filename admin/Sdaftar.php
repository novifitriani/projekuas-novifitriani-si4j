<?php
require_once "./koneksi.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $idpndftr=$_POST['idpndftr'];
    $nama=$_POST['fullname'];
    $hp=$_POST['hp'];
    $alamat=$_POST['alamat'];

    $sqlsavependaftar="INSERT INTO tbl_pndftrn VALUES
    ('$idpndftr','$nama','$hp','$alamat')";

    if(mysqli_query($koneksi,$sqlsavependaftar)){
        echo "<script> alert('Data Sudah disimpan');
        window.location.assign('index.php?page=pendaftaran');</script>";
    }
}