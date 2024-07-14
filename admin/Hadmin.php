<?php
 //mengambil koneksi basisdata
 require_once "koneksi.php";
 //Mengambil nim yang akan dihapus
 $idadmin=$_GET['id'];
 //Membuat SQL Hapus
 $deleteadmin="DELETE FROM tbl_admin WHERE id='$idadmin'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deleteadmin)){
 //tampilkan alert dan redirect ke halaman TampilDataAdmin
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=admin'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman TampilDataAdmin
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=admin'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa