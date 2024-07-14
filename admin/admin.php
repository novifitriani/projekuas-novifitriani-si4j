<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Master Data &nbsp;
      <small><small><small><small><small>
          <script type='text/javascript'>
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay();
              thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write(thisDay + ', '+ day +' ' + months[month] + ' ' + year);
            //
          </script>
        </small></small></small></small></small>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
          <li class="breadcrumb-item">Master Data</a></li>
          <li class="breadcrumb-item active">Data Admin</li>
        </ol>
      </nav>
        <br>

<?php
    include "koneksi.php";
    $sqladmin = "SELECT * FROM tbl_admin";
    $query = mysqli_query($koneksi,$sqladmin) or die("SQL Error");
    $nomor = 1;
    ?>

<div class="row" style="background-color:aliceblue; padding: 15px" >
    <h4 style="color:darkblue; font-weight:bold; margin-top:13px;">Data Admin</h4><br><br><br>
    <a href="?page=Tadmin"><button type="button" class="btn btn-primary rounded-pill" style="font-weight: bold; font-size:10px; width:125px; height:28px; float:right;">
    <i class="ri-add-fill"></i>Tambah Admin</button></a><br><br>

                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Kata Sandi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  //jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for, while, do-while, foreach)
                  //mysqli_fech_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data arrayassosiatif
                   while ($row = mysqli_fetch_assoc($query))
                  
                {
                  ?>
                  <tr>
                  <td><?= $nomor ?></td>
                    <td><?= $row['fulname'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['pass'] ?></td>
                    <td>
                      <a href="?page=Eadmin&id=<?= $row['id'];?>">
                      <button type="button" class="btn btn-info" style="width: 40px; height: 35px;"><i class="ri-edit-2-line"></i></button>
                      </a>&nbsp;
                      <a href="?page=Hadmin&id=<?= $row['id'];?>">
                      <button type="button" class="btn btn-danger"  style="width: 40px; height: 35px;"><i class="ri-delete-bin-5-line"></i></button></a>
                    </td>
                  </tr>
                  <?php $nomor++;
                } //akhir dari perulangan ?>
                
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->
</div>

</div>
</main>
                  
