<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Skema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h2>Daftar Skema</h2>
        <a href="index.php" style="margin-right: 10px;"><button type="button" class="btn btn-primary">Kembali</button></a>
        <a href="tambah_sertifikasi.php" style="margin-right: 10px;"><button type="button" class="btn btn-primary">Tambah Skema</button></a>
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Skema</th>
                    <th scope="col">Nama Skema</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Jumlah Unit</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <?php 
                    include "koneksi.php";
                
                    $sql = "SELECT * FROM tb_skema";
                    $query = mysqli_query($koneksi, $sql);


                    $dataArray = mysqli_fetch_all($query, MYSQLI_ASSOC);
                ?>

            <tbody>  
                <?php $i = 1; ?>
                <?php foreach($dataArray as $data) : ?>
                    <tr>
                        <td><?php print $i++; ?></td>
                        <td><?php print $data['Kd_skema']; ?></td>
                        <td><?php print $data['Nm_skema']; ?></td>
                        <td><?php print $data['Jenis']; ?></td>
                        <td><?php print $data['Jml_unit']; ?></td>
                        <td><?php print $data['Tahun']; ?></td>
                        <td>
                        <a href="edit_sertifikasi.php?id=<?php print $data['Kd_skema']; ?>" class="btn btn-warning" style="border-radius: 3px; color: white;">Edit</a>
                        <a href="delete_sertifikasi.php?id=<?php print $data['Kd_skema']; ?>" onclick="alert('Data akan dihapus');" class="btn btn-danger" style="border-radius: 3px; color: white;">Delete</a>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>

    </table>

    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>