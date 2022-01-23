<?php

$host="localhost";
$user="alda";
$pass="123456789";
$dbname="siswa";

$koneksi=mysqli_connect($host,$user,$pass,$dbname);
if($koneksi)
{
    echo "koneksi berhasil<br><br>";
}
else
{
    echo "koneksi gagal";
}

?>