




<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Lucifer Morningstar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
<?php
  $tematik = $_GET['tematik'];
  $kelas = $_GET['kelas'];
  $id_nilai = $_GET['id_nilai'];

  include "koneksi.php";
?>
    <section class="first-gallery-section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="text-content">
                  <h2>Nama Luna dari </h2>
                <h2>Kelas <?=$kelas?> Tematik <?=$tematik?></h2>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php
          $jawaban_siswa = 0;
          $data_nilai = mysqli_query($koneksi,"SELECT * FROM tb_nilai_siswa where id_nilai = ".$id_nilai."");
          foreach($data_nilai as $d_n){
          $jawaban_siswa = (array)json_decode($d_n['jawaban_siswa']);
          }
         ?>

        <?php
        $data_kelas = mysqli_query($koneksi,"SELECT * FROM tb_soalkelas where kelas=".$kelas." && tematik=".$tematik."");
         ?>
        <div class="content-wrapper">
          <form method="POST" action="simpan_jawaban.php" enctype="multipart/form-data">
          <div class="container">

          <div class="row" >
              <?php
              $no = 0;
              $jawaban = 0;
              foreach($data_kelas as $lokasi => $d_k){ $no++;
                $jawaban = $jawaban_siswa[$d_k['id_soal']];
                ?>

              <div class="col-md-6 text-left">
                <h4><?=$no?>. <?=$d_k['pertanyaan']?></h4>
                    <ol type='A'>
                      <?php if($jawaban == 'a' && $d_k['jawaban'] == 'a'){?>
                        <li style="color:blue"> <?=$d_k['a']?> &#10004;</li>
                      <?php }else if($jawaban == 'a' && $d_k['jawaban'] != 'a'){?>
                        <li style="color:red"> <?=$d_k['a']?> &#10006;</li>
                      <?php }else{?>
                        <li> <?=$d_k['a']?></li>
                      <?php }?>

                      <?php if($jawaban == 'b' && $d_k['jawaban'] == 'b'){?>
                        <li style="color:blue"> <?=$d_k['b']?> &#10004;</li>
                      <?php }else if($jawaban == 'b' && $d_k['jawaban'] != 'b'){?>
                        <li style="color:red"> <?=$d_k['b']?> &#10006;</li>
                      <?php }else{?>
                        <li> <?=$d_k['b']?></li>
                      <?php }?>

                      <?php if($jawaban == 'c' && $d_k['jawaban'] == 'c'){?>
                        <li style="color:blue"> <?=$d_k['c']?> &#10004;</li>
                      <?php }else if($jawaban == 'c' && $d_k['jawaban'] != 'c'){?>
                        <li style="color:red"> <?=$d_k['c']?> &#10006;</li>
                      <?php }else{?>
                        <li> <?=$d_k['c']?></li>
                      <?php }?>

                      <?php if($jawaban == 'd' && $d_k['jawaban'] == 'd'){?>
                        <li style="color:blue"> <?=$d_k['d']?> &#10004;</li>
                      <?php }else if($jawaban == 'd' && $d_k['jawaban'] != 'd'){?>
                        <li style="color:red"> <?=$d_k['d']?> &#10006;</li>
                      <?php }else{?>
                        <li> <?=$d_k['d']?></li>
                      <?php }?>

                    </ol>
                    <h5> => Jawaban Yang Benar <a style="text-transform: uppercase;"><?=$d_k['jawaban']?></a></h5>
              </div>
            <?php } ?>

          </div>
        </div>
      </form>
        </div>


        <?php
          $data_nilai = mysqli_query($koneksi,"SELECT * FROM tb_nilai_siswa where kelas=".$kelas." && tematik=".$tematik."");
          $data_soal = mysqli_query($koneksi,"SELECT * FROM tb_soalkelas where kelas=".$kelas." && tematik=".$tematik."");


          $no = 0;
          foreach($data_nilai as $d_n){
            $benar = 0;
            $salah = 0;
            $jawaban_siswa = (array)json_decode($d_n['jawaban_siswa']);
            foreach ($data_soal as $d_s) {
              if($jawaban_siswa[$d_s['id_soal']] == $d_s['jawaban']){
                $benar++;
              }else{
                $salah++;
              }
            }
            ?>
          <?php
          }
         ?>
        <div class="content-wrapper">
          <div class="container">
          <div class="row text-left" >
            <h2>Jawaban Benar = <?=$benar?></h2>
            <h2>Jawaban Salah = <?=$salah?></h2>
            <?php $total = (100/($benar+$salah))*$benar?>
            <h2>Nilai <?=number_format($total,2,",",".")?></h2>
          </div>

          <a href="nilaisiswa.php?kelas=<?=$kelas?>&tematik=<?=$tematik?>"><button class="btn btn-warning">Kembali</button></a>
        </div>
        </div>

        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
                <p>Copyright &copy; 2019 JOKI KALFIN  A.K.A  Lucifer MorningStrar</p>
              </div>
            </div>
          </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
