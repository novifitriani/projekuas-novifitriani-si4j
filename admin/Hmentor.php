<?php
 //mengambil koneksi basisdata
 require_once "koneksi.php";
 //Mengambil nim yang akan dihapus
 $idmentor=$_GET['id'];
 //Membuat SQL Hapus
 $deletementor="DELETE FROM tbl_mentor WHERE id='$idmentor'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deletementor)){
 //tampilkan alert dan redirect ke halaman TampilDataMentor
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=mentor'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman TampilDataMentor
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=mentor'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa