
<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam
 require_once "./koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
 //ambil data dari form, simpan dalam variabel
 $idjadwal=$_POST['idjadwal']; //yg didalam tanda kutip harus sama dengan name di form
 $nama=$_POST['nama'];
 $kls=$_POST['kls'];
 $hari=$_POST['hari'];
 $jam=$_POST['jam'];
 $mapel=$_POST['mapel'];

 //buat SQL untuk simpan data
$updatejadwal = "UPDATE tbl_jdwl SET nama= '$nama', kls='$kls', hari='$hari', jam='$jam', mapel='$mapel' WHERE id='$idjadwal'";

 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$updatejadwal))
 {
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah diupdate'); 
 window.location.assign('index.php?page=jadwal'); 
  </script>";
 } 
 }
 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.