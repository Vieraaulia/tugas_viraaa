<?php
$id = $_GET['id'];
$nama = $_GET['nama'];
$kelas = $_GET['id_kelas'];
// echo "ini proses tambah";
$database = new PDO('mysql:host=localhost;dbname=sekolahku','root','');
$query = $database->query("insert into siswa values ('','$nama','$kelas')");
