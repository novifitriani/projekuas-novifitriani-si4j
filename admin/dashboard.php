<main id="main" class="main">
<div class="pagetitle">
      <h1 style="font-weight: bold;">Dashboard &nbsp;
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
            
          </script>
        </small></small></small></small></small>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
        

      <?php
      date_default_timezone_set('Asia/Jakarta');
      $jam = date('H');

      if($jam >=5 && $jam <12){
        $salam = "Selamat Pagi";
      }elseif ($jam >=12 && $jam <15){
        $salam = "Selamat Siang";
      }elseif ($jam >=15 && $jam <18){
        $salam = "Selamat Sore";
      }else {
        $salam = "Selamat Malam";
      }

      ?>

<div class="row" style="background-color:aliceblue; padding: 15px" >

<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <?= $salam; ?>, Selamat Datang  <b>Administrator Les Frienship</b>. 
</div>
</div>


</div>
</main>

