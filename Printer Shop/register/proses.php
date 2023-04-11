<?php
require '../koneksi.php';

function tambahUser($data){
    global $conn;

    $nama_lengkap= $_POST["nama_lengkap"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $roles =$_POST["roles"];

    $query = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$nama_lengkap', '$username', '$password', '$foto', '$roles')");

    return mysqli_affected_rows($conn);
}


?>