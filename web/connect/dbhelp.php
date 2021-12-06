<?php
include_once('db.php');

// insert, update, delete = > dung function nay
function request($sql)
{
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

// su dung cho lenh select = > tra ve ket qua
function requestTable($sql)
{

    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    $resultset = mysqli_query($conn, $sql);
    $list = [];
    while ($row = mysqli_fetch_array($resultset, 1)) {
        $list[] = $row;
    }
    mysqli_close($conn);
    return $list;
}
