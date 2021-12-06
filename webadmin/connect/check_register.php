<?php
include_once('dbhelp.php');
$name = $idstudent = $password = $confirmpassword = '';
if (!empty($_POST)) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $class = $_POST['class'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    if ($password != $confirmpassword) {
        echo '<script> alert("Hai mat khau phai giong nhau") </script>';
    } else {
        if (count(requestTable("SELECT * FROM user WHERE username = '$username'")) > 0) {
            echo '<script> alert("ID nay da duoc dang ky") </script>';
        } else {
            $sql = "INSERT INTO user (id, username, password, fullname, email, address, phone, class, datiem) values ('2', '$username', '$password', '$fullname', '$email', '$address', '$phone', '$class', '0')";
            request($sql);
            echo '<script> alert("Dang ky thanh cong") </script>';
            header('Location: login.php');
            die();
        }
    }
}
