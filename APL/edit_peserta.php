<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Peserta Sertifikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <?php 
    include "koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_peserta WHERE Id_peserta = '$_GET[id]'") or die(mysqli_errno($Koneksi));
    $data = mysqli_fetch_array($sql);

    
    $query = "SELECT Kd_skema, Nm_skema FROM tb_skema";
    $Kode_skema = mysqli_query($koneksi, $query);

    function is_selected($data, $current_option){
      return $data === $current_option? 'selected' : '';
    }
    ?>

    <form action="edit_peserta_proses.php" name="edit_peserta" method="POST">

    <div class="container">
            <h1>Edit Peserta Sertifikasi</h1>
            <a href="index.php" style="margin-right: 10px;"><button type="button" class="btn btn-primary">Kembali</button></a>
            <br><br>
            <input type="hidden" name="id" value="<?php echo $data['Id_peserta']; ?>">
            <div class="mb-3">
                <label for="Kode_skema" class="form-label">Skema yang dipilih: </label>
                <select name="kode_skema" id="kode_skema" class="form-control">
                <?php
                while ($row = mysqli_fetch_assoc($Kode_skema)) {
                  $selected = is_selected($data['Kd_skema'], $row['Kd_skema']);
                  echo "<option value='" . $row['Kd_skema'] . "' $selected>" . $row['Nm_skema'] . "</option>";
                  }
                  ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="nama_peserta" class="form-label">Nama Peserta: </label>
                <input type="text" class="form-control" name="nama_peserta" value="<?php echo $data['Nm_peserta']; ?>">
            </div>

            <div class="mb-3">
                <label for="jekel" class="form-label">Jenis Kelamin: </label>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jekel" id="exampleRadios1" value="Laki-laki" <?php echo $data['Jekel'] === 'Laki-laki' ? 'checked' : '';?>>
                    <label class="form-check-label" for="exampleRadios1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jekel" id="exampleRadios2" value="Perempuan" <?php echo $data['Jekel'] === 'Perempuan' ? 'checked' : '';?>>
                    <label class="form-check-label" for="exampleRadios2">
                        Perempuan
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat: </label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $data['Alamat']; ?>">
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label">No. Hp: </label>
                <input type="tel" class="form-control" name="telepon" value="<?php echo $data['No_hp']; ?>">
            </div>

            <button type="submit" name="tambah_peserta" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>