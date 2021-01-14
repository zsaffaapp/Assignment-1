<?php

require_once "db.php";

$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];

$sql = "INSERT INTO tbl_mhsw VALUES (NIM, Nama, Alamat) VALUES ('".$nim."','".$nama."','".$alamat."')";

if ($conn->query($sql)) {
    echo "data sudah berhasil ditambahkan";
}

else {
    die ("error: ". $conn->error );

}

exit;

