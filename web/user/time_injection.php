<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Đăng ký tiêm chủng</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- style css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../images/fevicon.png" type="../image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

</head>

<body class="main-layout">

    <header>
        <nav class="navbar navbar-expand-lg bg_nav fixed-top">
            <div class="left">
                <img src="../images/logo.png">
            </div>
            <div class="collapse navbar-collapse bg_text" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class=" title_item_nav"><a class="nav-item active" href="../index.php">Trang chủ</a></li>
                    <li class=" title_item_nav"><a class="nav-item" href="declare.php">Khai báo y tế</a></li>
                    <li class=" title_item_nav"><a class="nav-item" href="time_injection.php">Lịch tiêm</a></li>
                    <li class=" title_item_nav"><a class="nav-item" href="register_injection.php">Đăng ký tiêm</a></li>
                    <li class=" title_item_nav"><a class="nav-item" href="edit_inf.php">Thay đổi thông tin</a></li>
                </ul>
                <a class="btn btn_login" type="submit" href="../logout.php">Đăng xuất</a>
            </div>
        </nav>
    </header>
    <!-- end header -->

    <!-- doctors -->
    <div class="container title_register">

        <div>
            <h3>Danh sách đăng ký tiêm</h3>
        </div>
        <div>
            <figure class="rotate-image img-box">
                <img src="../images/case.png" alt="" class="rotate-me">
            </figure>
        </div>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Mã sinh viên</th>
                        <th scope="col">Ngày tiêm</th>
                        <th scope="col">Địa điểm tiêm</th>
                        <th scope="col">Tên Vaccine</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('../connect/dbhelp.php');
                    $idstudent = $_SESSION['username'];
                    $sql = "SELECT * FROM danhsachtiem WHERE idstudent = '$idstudent'";
                    $rows = requestTable($sql);
                    for ($i = 0; $i < count($rows); $i++) {
                        echo
                        '<tr>
                                <th scope="row">' . ($i + 1) . '</th>
                                <td>' . $rows[$i]['fullname'] . '</td>
                                <td>' . $rows[$i]['idstudent'] . '</td>
                                <td>' . $rows[$i]['date'] . '</td>
                                <td>' . $rows[$i]['address'] . '</td>
                                <td>' . $rows[$i]['namevaccine'] . '</td>
                                <td><button type="button" class="btn btn-info" name="delete" onclick="delete_time(' . $rows[$i]['id'] . ')">Hủy</button></td>
                                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function delete_time(id) {
            option = confirm('Bạn có muốn hủy không ?');
            if (!option) {
                return;
            }
            $.post('delete_time_injection.php', {
                'id': id
            }, function(data) {
                alert("Xoa thanh cong");
                location.reload();
            })
        }
    </script>

</body>

</html>