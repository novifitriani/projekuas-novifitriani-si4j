<?php
session_start();

include_once "./admin/koneksi.php";

        $user = $_POST['user'];
        $pass =$_POST['pass'];
    
    $query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username = '$user' AND pass = '$pass'");
    $cek = mysqli_num_rows($query);
    
    if ($cek > 0){
        $data = mysqli_fetch_assoc($query);
        $_SESSION['id']=session_id();
        $_SESSION['user'] = $user;
        $_SESSION['nama']= $data['fulname'];
        $_SESSION['notif'] = "Login Berhasil";

        header("location: admin");
    }

else {
        echo "<script> alert('Password atau Username yang Anda masukkan Salah, Coba Lagi !!');
        window.location.assign('login.php); </script>";
        }