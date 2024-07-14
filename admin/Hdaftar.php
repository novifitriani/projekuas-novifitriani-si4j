 <?php
 //mengambil koneksi basisdata
 require_once "koneksi.php";
 //Mengambil nim yang akan dihapus
 $idpndftr=$_GET['id'];
 //Membuat SQL Hapus
 $deletedaftar="DELETE FROM tbl_pndftrn WHERE id='$idpndftr'";
 //Proses SQL ke basisdata
 if(mysqli_query($koneksi,$deletedaftar)){
 //tampilkan alert dan redirect ke halaman TampilDatadaftar
 echo "<script> alert('Data Berhasil di Hapus');
window.location.assign('index.php?page=pendaftaran'); </script>";
 }else{
 //tampilkan alert dan redirect ke halaman TampilDataDaftar
 echo "<script> alert('Data Gagal di Hapus');
 window.location.assign('index.php?page=pendaftaran'); </script>";
 }
 //sampai disini kode hapus sudah selesai, bisa