<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam basisdata.
 require_once "koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST"){
 //ambil data dari form, simpan dalam variabel
 $idadmin=$_POST['idadmin']; //yg didalam tanda kutip harus sama dengan name di form
 $nmadmin=$_POST['nmadmin'];
 $user=$_POST['user'];
 $pass=$_POST['pass'];
  
 //buat SQL untuk simpan data
 $sqlsaveadmin="INSERT INTO tbl_admin VALUES 
 ('$idadmin','$nmadmin','$user','$pass')";
 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$sqlsaveadmin)){
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah disimpan');
 window.location.assign('index.php?page=admin');
 </script>";
 }
 }


 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.