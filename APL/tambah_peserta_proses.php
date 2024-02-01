<?php

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $kd_skema=$_POST['kode_skema'];
    $nm_peserta=$_POST['nama_peserta'];
    $jenis_kelamin=$_POST['jekel'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];

    $sql= "INSERT INTO tb_peserta (Kd_skema, Nm_peserta, Jekel, Alamat, No_hp)
    VALUES ('$kd_skema', '$nm_peserta', '$jenis_kelamin', '$alamat', '$telepon')"; 

    $query=mysqli_query($koneksi, $sql);
    ?>

    <?php
    if ($query) { ?>
        <script>
            alert('Data berhasil ditambahkan!');
            window.location='index.php';
        </script>

    <?php } else { ?>
        <script>
            alert('Data gagal ditambahkan!');
            window.location='tambah_peserta.php';
        </script>
        <?php }
    $database->close();
}
?>