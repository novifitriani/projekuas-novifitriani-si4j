
<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam
 require_once "./koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
 //ambil data dari form, simpan dalam variabel
 $idpndftr=$_POST['idpndftr']; //yg didalam tanda kutip harus sama dengan name di form
 $nmpdft=$_POST['fullname'];
 $hp=$_POST['hp'];
 $almt=$_POST['almt'];
 

 //buat SQL untuk simpan data
$updatedaftar = "UPDATE tbl_pndftrn SET fullname= '$nmpdft', no_hp='$hp', alamat='$almt' WHERE id='$idpndftr'";

 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$updatedaftar))
 {
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah diupdate'); 
 window.location.assign('index.php?page=pendaftaran'); 
  </script>";
 } 
 }
 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.