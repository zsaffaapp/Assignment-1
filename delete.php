<?php
require_once 'db.php';

$alamat =$_GET['alamat'];
mysql_query("D ELETE FROM mahasiswa WHERE alamat='$alamat' ") or die ((mysql_error());

header("location:index.php?pesan=hapus");
?>

