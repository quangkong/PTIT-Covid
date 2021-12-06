<?php
include_once('dbhelp.php');
session_start();
$idstudent = $password = '';
if (!empty($_POST)) {
    $idstudent = $_POST['idstudent'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$idstudent' and password = '$password'";
    //var_dump($conn);

    $list = requestTable($sql);
    //var_dump($result);

    if ($list == null) {
        echo '<script> alert("Sai mat khau hoac tai khoan") </script>';
    } else {
        $id = $list[0]['id'];
        $_SESSION['username'] = $list[0]['username'];
        $_SESSION['fullname'] = $list[0]['fullname'];
        $_SESSION['id'] = $list[0]['id'];
        if ($id == '1') {
            header('Location: admin/home_admin.php');
            //$_SESSION['idstudent'] = $idstudent;
            die();
        } else {
            header('Location: user/home_user.php');
            //$_SESSION['idstudent'] = $idstudent;
            die();
        }
    }
}
