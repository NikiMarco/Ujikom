<?php

include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id=$_POST['id'];
    $kd_skema=$_POST['kode_skema'];
    $nm_peserta=$_POST['nama_peserta'];
    $jenis_kelamin=$_POST['jekel'];
    $alamat=$_POST['alamat'];
    $telepon=$_POST['telepon'];

    $sql= "UPDATE tb_peserta SET
    Kd_skema = '$kd_skema',
    Nm_peserta = '$nm_peserta',
    Jekel = '$jenis_kelamin', 
    Alamat = '$alamat',
    No_hp = '$telepon'
    WHERE Id_peserta = '$id'";

    $query=mysqli_query($koneksi, $sql);
    ?>

    <?php
    if ($query) { ?>
        <script>
            alert('Data berhasil diubah!');
            window.location='index.php';
        </script>

    <?php } else { ?>
        <script>
            alert('Data gagal diubah!');
            window.location='index.php';
        </script>
        <?php }
    $database->close();
}
?>