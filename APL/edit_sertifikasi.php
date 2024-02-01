<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Skema sertifikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <?php 
    include "koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_skema WHERE Kd_skema = '$_GET[id]'") or die(mysqli_errno($Koneksi));
    $data = mysqli_fetch_array($sql);
    ?>

    <form action="edit_sertifikasi_proses.php" name="edit_sertifikasi" method="POST">

       <div class="container">
        <h3>Edit Skema Sertifikasi</h3>
        <a href="sertifikasi.php" style="margin-right: 10px;"><button type="button" class="btn btn-primary">Kembali</button></a>
        <br><br>
            <div class="mb-3">
                <label for="kode_skema" class="form-label">Kode Skema: </label>
                <input type="text" class="form-control" name="kode_skema" value="<?php echo $data['Kd_skema']; ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="nama_skema" class="form-label">Nama Skema: </label>
                <input type="text" class="form-control" name="nama_skema" value="<?php echo $data['Nm_skema']; ?>">
            </div>
            
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis Skema: </label>
                <input type="text" class="form-control" name="jenis" value="<?php echo $data['Jenis']; ?>">
            </div>

            <div class="mb-3">
                <label for="jumlah_unit" class="form-label">Jumlah Unit: </label>
                <input type="number" class="form-control" name="jumlah_unit" value="<?php echo $data['Jml_unit']; ?>">
            </div>

            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun: </label>
                <input type="number" class="form-control" name="tahun" value="<?php echo $data['Tahun']; ?>">
            </div>

            <button type="submit" name="edit_dosen" class="btn btn-primary">Submit</button>
       </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>