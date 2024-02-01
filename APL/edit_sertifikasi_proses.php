<?php

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $kd_skema=$_POST['kode_skema'];
    $nm_skema=$_POST['nama_skema'];
    $jenis_skema=$_POST['jenis'];
    $jml_unit=$_POST['jumlah_unit'];

    $sql= "UPDATE tb_skema SET
    Nm_skema = '$nm_skema',
    Jenis = '$jenis_skema', 
    Jml_unit = '$jml_unit'
    WHERE Kd_skema = '$kd_skema'";

    $query=mysqli_query($koneksi, $sql);
    ?>

    <?php
    if ($query) { ?>
        <script>
            alert('Data berhasil diubah!');
            window.location='sertifikasi.php';
        </script>

    <?php } else { ?>
        <script>
            alert('Data gagal diubah!');
            window.location='edit_sertifikasi.php';
        </script>
        <?php }
    $database->close();
}
?>