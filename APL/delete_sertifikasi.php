<?php

include "koneksi.php";

$query =mysqli_query($koneksi, "DELETE FROM tb_skema WHERE Kd_skema = '$_GET[id]'");
?>
<?php
    if ($query) { ?>
        <script>
            alert('Data berhasil dihapus!');
            window.location='sertifikasi.php';
        </script>

    <?php } else { ?>
        <script>
            alert('Data gagal ditambahkan!');
            window.location='sertifikasi.php';
        </script>
    <?php }
    ?>