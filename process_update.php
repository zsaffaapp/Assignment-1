<?php

require_once "db.php";

$nim = $_post['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat];

$sql = "UPDATE mahasiswa SET nama = '".$nama."', alamat= '".$alamat."'
    WHERE nim = '".$nim."'";

if ($conn->query($sql)){


    echo "Data sudah berhasil diupdate";
    header('Location: index.php');

}

else
{
    die("Error: " . $conn->error);
}

exit;