<?php
include_once('../connect/dbhelp.php');
session_start();

if (!empty($_GET)) {
    $fullname = $_SESSION['fullname'];
    $username = $_SESSION['username'];
    $id = $_GET['id'];
    $sqlselect = "SELECT * FROM lichtiem WHERE id = '$id'";
    $lich = requestTable($sqlselect);
    $date = $lich[0]['date'];
    $address = $lich[0]['address'];
    $namevaccine = $lich[0]['namevaccine'];
    $sql = "INSERT INTO danhsachtiem (idstudent, fullname, date, address, namevaccine) values ('$username', '$fullname', '$date', '$address', '$namevaccine')";
    request($sql);
    echo "<script>
    alert('Bạn đã đăng ký lịch tiêm thành công');
    window.location.href='../index.php';
    </script>";
    die();
}
