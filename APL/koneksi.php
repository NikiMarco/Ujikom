<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_sertifikat";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if(mysqli_connect_errno())
{
    echo "Gagal koneksi : " . mysqli_connect_errno(); 
}