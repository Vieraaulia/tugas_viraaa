<?php
//koneksi
$database = new PDO('mysql:host=localhost;dbname=sekolahbaru','root','');
//query
$query = $database->query("UPDATE `siswa` SET `id`='01', `name`='putri' WHERE `kelas` = 12'");
