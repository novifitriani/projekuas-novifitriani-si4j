<?php
 //mengambil koneksi basisdata
 require_once "koneksi.php";
 //Mengambil nim yang akan dihapus
 $idjadwal=$_GET['id'];
 //Membuat SQL Hapus
 $deletejadwal="DELETE FROM tbl_jdwl WHERE id='$idjadwal'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deletejadwal)){
 //tampilkan alert dan redirect ke halaman TampilDatajadwal
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=jadwal'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman TampilDatajadwal
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=jadwal'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa