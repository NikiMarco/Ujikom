<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h2>Data Peserta Skema</h2>
        <a href="tambah_peserta.php" style="margin-right: 10px;"><button type="button" class="btn btn-primary">Tambah Data Peserta</button></a>
        <a href="sertifikasi.php" style="margin-left: 10px;"><button type="button" class="btn btn-primary">Data Skema</button></a>
        <br><br>

        <form action="index.php" method="get">
            <label for="cari">Cari: </label>
            <input type="text" name="cari" id="cari">
            <input type="submit" value="cari">
        </form>

        <?php 
        if(isset($_GET['cari']))
        {
            $cari = $_GET['cari'];
            echo "<b>Hasil Pencarian : " . $cari . "</b>";
        }
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Skema</th>
                    <th scope="col">Nama Peserta</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Hp</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <?php 
            include "koneksi.php";
            $no = 1;
            
            if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['cari']))
            {
                $cari = $_GET['cari'];
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_peserta WHERE Nm_peserta LIKE '%$cari%' OR Alamat LIKE '%$cari%'");
            }
            else {
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_peserta");
            }
            while($data = mysqli_fetch_array($sql)){
                ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $data['Kd_skema']; ?></td>
                    <td><?php echo $data['Nm_peserta']; ?></td>
                    <td><?php echo $data['Jekel']; ?></td>
                    <td><?php echo $data['Alamat']; ?></td>
                    <td><?php echo $data['No_hp']; ?></td>
                    <td>
                    <a href="edit_peserta.php?id=<?php print $data['Id_peserta']; ?>" class="btn btn-warning" style="border-radius: 3px; color: white;">Edit</a>
                    <a href="delete_peserta.php?id=<?php print $data['Id_peserta']; ?>" onclick="alert('Data akan dihapus');" class="btn btn-danger" style="border-radius: 3px; color: white;">Delete</a>
                    </td>
                </tr>
                <br>
            <?php 
                $no++;
            }
            ?>
        </tbody>
    </table>

    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>