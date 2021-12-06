<?php
include_once('../connect/dbhelp.php');
if (!empty($_POST)) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $khaibao = $_POST['khaibao'];

    $sql = "INSERT INTO khaibaoyte (idstudent, fullname, class, phone, 	address	, khaibao) values ('$username', '$fullname', '$class', '$phone', '$address', '$khaibao')";
    request($sql);
    echo '<script> alert("Khai bao thanh cong") </script>';
    header('Location: ../index.php');
    die();
}
