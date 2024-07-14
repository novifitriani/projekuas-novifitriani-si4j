<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Edit Data Pendaftar &nbsp;
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
          <li class="breadcrumb-item"><a href="?page=pendaftaran">Data Pendaftar</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
        <br>

        <?php
            $idpndftr=$_GET['id'];
            $sqldatapendaftar= "SELECT * FROM tbl_pndftrn WHERE id='$idpndftr'";
            require_once "./koneksi.php";
            $query=mysqli_query($koneksi,$sqldatapendaftar);
            $data=mysqli_fetch_assoc($query);
        ?>

<div class="row" style="background-color:aliceblue; padding: 20px; width: 100%;" >
    <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Edit Data Pendaftar (<?= $data['fullname'];?> )</h5><br><br>
      <form action="Udaftar.php" method="POST" style="margin-left:70px; font-size:13px;">

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Id Pendaftar</label>
                  <div class="col-sm-6">
                    <input type="text" name="idpndftr" id="idpndftr" value="<?=$data['id']?>" placeholder="tidak perlu diisi, karena terisi otomatis!!" class="form-control" style="font-size:13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Nama Pendaftar</label>
                  <div class="col-sm-6">
                    <input type="text" name="fullname" id="fullname" value="<?=$data['fullname']?>"placeholder="masukan nama pendaftar" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">No HP</label>
                  <div class="col-sm-6">
                    <input type="text" name="hp" id="hp" value="<?=$data['no_hp']?>" placeholder="masukan No HP" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Alamat</label>
                  <div class="col-sm-6">
                    <input type="text" name="almt" id="almt" value="<?=$data['alamat']?>" placeholder="masukan  Alamat" class="form-control" style="font-size: 13px;">
                  </div>
          </div>
          <br><br><br>
          
          <div class="col-sm-10" style="float:left;">
                    <button type="submit" name="kirim" class="btn btn-primary rounded-pill" style="font-size:13px;">Update Data</button>
        </div>
        
    </form>
    </div>
      
 </div>
</main>