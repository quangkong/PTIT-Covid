<?php
include_once('../connect/dbhelp.php');
$date = $address = $quantity = $namevaccine = '';
if (!empty($_POST)) {
    $date = $_POST['date'];
    $address = $_POST['address'];
    $quantity = $_POST['quantity'];
    $namevaccine = $_POST['namevaccine'];
    $sql = "INSERT INTO lichtiem (date, address, quantity, namevaccine) values ('$date', '$address', '$quantity', '$namevaccine')";
    request($sql);
    echo '<script> alert("Dang ky thanh cong") </script>';
    header('Location: home_admin.php');
    die();
}
