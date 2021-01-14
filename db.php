<?php

$servername ="localhost"; //nama macem-macem host
$username="root"; //
$password=""; //password disetel di xampp
$nama_database = "dbbelajarphp"; //langsung connect ke database

//Create connection
$conn = new mysqli 
($servername, 
$username, 
$password, 
$nama_database);
//mysqli adalah library/module koneksi database di php
//googling mysqli documentation, cari isinya my sqli apa aja?


//url biasanya localhost:80/belajar --> 80 port ini default. (xampp)
//kalo nginstall skype biasanya error soalnya skype jg 80 portnya
//mysql portnya 3306


//check connection
if ($conn->connect_error) {
    die("connection failed : ") . $conn->connect_error;
}




?>