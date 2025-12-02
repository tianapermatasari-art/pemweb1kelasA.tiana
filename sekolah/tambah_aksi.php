<?php

include 'koneksi.php';

$id = $_post['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"insert into siswa values('','id','nama','nim','alamat')");

header("location:index.php");

?>