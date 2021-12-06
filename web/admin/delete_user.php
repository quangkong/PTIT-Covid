<?php
include_once('../connect/dbhelp.php');
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = 'DELETE FROM danhsachtiem WHERE id = ' . $id;
    request($sql);
}
