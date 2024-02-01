<?php

include "koneksi.php";

$query =mysqli_query($koneksi, "DELETE FROM tb_peserta WHERE Id_peserta = '$_GET[id]'");
?>
<?php
    if ($query) { ?>
        <script>
            alert('Data berhasil dihapus!');
            window.location='index.php';
        </script>

    <?php } else { ?>
        <script>
            alert('Data gagal dihapus!');
            window.location='index.php';
        </script>
    <?php }
    ?>