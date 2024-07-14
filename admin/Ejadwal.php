<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Edit Data Jadwal &nbsp;
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
          <li class="breadcrumb-item"><a href="?page=jadwal">Data Jadwal</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
      </nav>
        <br>

        <?php
            $idjadwal=$_GET['id'];
            $sqldatajadwal= "SELECT * FROM tbl_jdwl WHERE id='$idjadwal'";
            require_once "./koneksi.php";
            $query=mysqli_query($koneksi,$sqldatajadwal);
            $data=mysqli_fetch_assoc($query);
        ?>

<div class="row" style="background-color:aliceblue; padding: 20px; width: 100%;" >
    <h5 style="color:darkblue; font-weight:bold; margin-top:13px; margin-bottom:40px">Edit Data Jadwal (<?= $data['nama'];?> )</h5><br><br>
      <form action="Ujadwal.php" method="POST" style="margin-left:70px; font-size:13px;">

      <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Id Jadwal</label>
                  <div class="col-sm-6">
                    <input type="text" name="idjadwal" id="idjadwal" value="<?=$data['id']?>" placeholder="tidak perlu diisi, karena terisi otomatis!!" class="form-control" style="font-size:13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Nama Anggota</label>
                  <div class="col-sm-6">
                    <input type="text" name="nama" id="nama" value="<?=$data['nama']?>"placeholder="masukan nama Anggota" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Kelas</label>
                  <div class="col-sm-6">
                    <input type="text" name="kls" id="kls" value="<?=$data['kls']?>" placeholder="masukan Kelas Anggota" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Hari</label>
                  <div class="col-sm-6">
                    <input type="text" name="hari" id="hari" value="<?=$data['hari']?>" placeholder="masukan  Hari" class="form-control" style="font-size: 13px;">
                  </div>
          </div>
          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">jam</label>
                  <div class="col-sm-6">
                    <input type="text" name="jam" id="jam" value="<?=$data['jam']?>" placeholder="masukan Jadwal Jam" class="form-control" style="font-size: 13px;">
                  </div>
          </div>

          <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" style="color:darkblue;">Mata Pelajaran</label>
                  <div class="col-sm-6">
                    <input type="text" name="mapel" id="mapel" value="<?=$data['mapel']?> "placeholder="masukan Nama Mapel" class="form-control" style="font-size: 13px;">
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