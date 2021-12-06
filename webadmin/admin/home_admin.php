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
    <title>Covido</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../images/fevicon.png" type="../image/gif" />
</head>
<!-- body -->

<body>

    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg bg_nav fixed-top">
            <div class="left">
                <img src="../images/logo.png">
            </div>
            <div class="collapse navbar-collapse bg_text" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class=" title_item_nav"><a class="nav-item active" href="../index.php">Lịch tiêm</a></li>
                    <li class=" title_item_nav"><a class="nav-item active" href="search.php">Tra cứu</a></li>
                    
                </ul>
                <a class="btn btn_login" type="submit" href="../logout.php">Đăng xuất</a>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-top: 180px;">
        <div class="text-center">
            <p style="font-size: 100px; color:brown">Lịch tiêm</p>
        </div>
        <div style="margin-top: 80px;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Ngày tiêm</th>
                        <th scope="col">Địa điểm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tên Vaccine</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('../connect/dbhelp.php');
                    //session_start();

                    $sql = "SELECT * FROM lichtiem";

                    //var_dump($result);
                    $rows = requestTable($sql);
                    for ($i = 0; $i < count($rows); $i++) {
                        echo
                        '<tr>
                                <th scope="row">' . ($i + 1) . '</th>
                                <td>' . $rows[$i]['date'] . '</td>
                                <td>' . $rows[$i]['address'] . '</td>
                                <td>' . $rows[$i]['quantity'] . '</td>
                                <td>' . $rows[$i]['namevaccine'] . '</td>
                                <td><button type="button" class="btn btn-success name="edit" onclick=window.open("add_time_injection.php?id=' . $rows[$i]['id'] . '","_self")>Sửa</button></td>
                                <td><button type="button" class="btn btn-danger" name="delete" onclick="delete_time(' . $rows[$i]['id'] . ')">Xóa</button></td>
                                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div>
            <a type="button" class="btn btn-primary" href="add_time_injection.php">Thêm lịch tiêm</a>
        </div>
    </div>

    <script>
        function delete_time(id) {
            option = confirm('Bạn có muốn xóa không ?');
            if (!option) {
                return;
            }
            $.post('delete_time_injection.php', {
                'id': id
            }, function(data) {
                alert("Xóa thành công");
                location.reload();
            })
        }
    </script>
</body>

</html>