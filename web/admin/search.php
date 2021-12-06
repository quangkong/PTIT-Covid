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
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../images/fevicon.png" type="../image/gif" />
    <!-- Scrollbar Custom CSS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



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
                    <li class=" title_item_nav"><a class="nav-item active" href="../index.php">Trang chủ</a></li>
                    <li class=" title_item_nav"><a class="nav-item active" href="search.php">Tra cứu</a></li>

                </ul>
                <a class="btn btn_login" type="submit" href="../logout.php">Đăng xuất</a>
            </div>
        </nav>
    </header>
    <div class="container" style="margin-top: 180px;">
        <div class="text-center">
            <p style="font-size: 100px; color:brown">Thông tin đăng ký tiêm</p>
        </div>
        <div style="margin-top: 80px;">
            <form method="get">
                <label for="validationCustom01" class="form-label">Tìm kiếm theo tên</label>
                <input type="text" class="form-control" id="validationCustom01" name="search" placeholder="Nhập tên tìm kiếm">
            </form>
        </div>
        <div style="margin-bottom: 20px;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Mã sinh viên</th>
                        <th scope="col">Ngày tiêm</th>
                        <th scope="col">Địa điểm tiêm</th>
                        <th scope="col">Tên Vaccine</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('../connect/dbhelp.php');
                    //session_start();
                    if (isset($_GET['search']) && $_GET['search'] != '') {
                        // tim kiem theo ten
                        $sql = 'SELECT * FROM danhsachtiem where fullname like "%' . $_GET['search'] . '%"';
                    } else {
                        $sql = "SELECT * FROM danhsachtiem";
                    }
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
                                <td><button type="button" class="btn btn-danger" name="delete" onclick="delete_user(' . $rows[$i]['id'] . ')">Xóa</button></td>
                                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="container" style="margin-top: 180px;">
            <div class="text-center">
                <p style="font-size: 80px; color:brown">Thống kê số mũi tiêm đã tiêm</p>
            </div>
            <div style="margin-top: 80px; margin-left: 150px;" id="piechart">
                <script type="text/javascript">
                    // Load google charts
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Sinh viên', 'Mũi tiêm'],
                            ['Đã tiêm 0 mũi', <?php
                                                $sql = "SELECT * FROM user WHERE datiem = '0'";
                                                echo count(requestTable($sql));
                                                ?>],
                            ['Đã tiêm 1 mũi', <?php
                                                $sql = "SELECT * FROM user WHERE datiem = '1'";
                                                echo count(requestTable($sql));
                                                ?>],
                            ['Đã tiêm 2 mũi', <?php
                                                $sql = "SELECT * FROM user WHERE datiem = '2'";
                                                echo count(requestTable($sql));
                                                ?>],
                        ]);
                        var options = {
                            'title': 'Thông kê mũi tiêm',
                            'width': 800,
                            'height': 600
                        };
                        var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    }
                </script>
            </div>
        </div>
    </div>
    <script>
        function delete_user(id) {
            option = confirm('Bạn có muốn xóa người này không ?');
            if (!option) {
                return;
            }
            $.post('delete_user.php', {
                'id': id
            }, function(data) {
                alert("Xoa thanh cong");
                location.reload();
            })
        }
    </script>

</body>

</html>