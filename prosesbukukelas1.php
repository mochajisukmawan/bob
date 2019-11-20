<html>
<head>
    <title>Tutorial Cara Membuat Upload File Dengan PHP MySQL</title>
</head>
<body>
    <h1>Form Upload File Dengan PHP</h1>
    <?php 
    include "koneksi.php";
    if($_POST['upload']){
        $judulbuku    = $_POST['judulbuku'];
        $ekstensi_diperbolehkan    = array('pdf','docx');
        $nama    = $_FILES['buku']['name'];
        $x        = explode('.', $nama);
        $ekstensi    = strtolower(end($x));
        $ukuran        = $_FILES['buku']['size'];
        $file_tmp    = $_FILES['buku']['tmp_name']; 
     
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){ 
                move_uploaded_file($file_tmp, 'buku/kelas1/'.$nama);
                $cek= mysqli_query("INSERT INTO tb_kelas1 VALUES(NULL, '$judulbuku', '$nama')");
                if($cek){
                    echo 'FILE BERHASIL DI UPLOAD!';
                }
                else{
                    echo 'FILE GAGAL DI UPLOAD!';
                }
            }
            else{
                echo 'UKURAN FILE TERLALU BESAR!';
            }
        }
        else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN!';
        }
    }
    ?> 
    <br/>
    <br/>
    <a href="./">Kembali</a>
    <br/>
    <br/> 
    <table>
        <?php 
            $data = mysqli_query("SELECT * FROM tb_kelas1");
            while($row = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><a href="buku/kelas1/<?php echo $row['buku'];?>">Lihat File</a></td> 
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>