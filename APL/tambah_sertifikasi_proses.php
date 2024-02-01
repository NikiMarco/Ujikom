<?php

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $kd_skema=$_POST['kode_skema'];
    $nm_skema=$_POST['nama_skema'];
    $jenis_skema=$_POST['jenis'];
    $jml_unit=$_POST['jumlah_unit'];
    $tahun=$_POST['tahun'];

    $sql= "INSERT INTO tb_skema (Kd_skema, Nm_skema, Jenis, Jml_unit, Tahun)
    VALUES ('$kd_skema', '$nm_skema', '$jenis_skema', '$jml_unit', '$tahun')"; 

    $query=mysqli_query($koneksi, $sql);
    ?>

    <?php
    if ($query) { ?>
        <script>
            alert('Data berhasil ditambahkan!');
            window.location='sertifikasi.php';
        </script>

    <?php } else { ?>
        <script>
            alert('Data gagal ditambahkan!');
            window.location='tambah_sertifikasi.php';
        </script>
        <?php }
    $database->close();
}
?>