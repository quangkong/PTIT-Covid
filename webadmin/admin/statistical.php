<?php
include_once('../connect/dbhelp.php');
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
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
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
                    <li class=" title_item_nav"><a class="nav-item active" href="statistical.php">Thống kê</a></li>
                </ul>
                <a class="btn btn_login" type="submit" href="../logout.php">Đăng xuất</a>
            </div>
        </nav>
    </header>
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
</body>

</html>