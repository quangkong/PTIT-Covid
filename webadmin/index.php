<?php
session_start();
if (isset($_SESSION['id'])) {
    if ($_SESSION['id'] == '1') {
        header('Location: admin/home_admin.php');
    } else {
        header('Location: user/home_user.php');
    }
}
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
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>
<!-- body -->

<body>

    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg bg_nav fixed-top">
            <div class="left">
                <img src="images/logo.png">
            </div>
            <div class="collapse navbar-collapse bg_text" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class=" title_item_nav"><a class="nav-item active" href="index.php">Trang chủ</a></li>
                    <li class=" title_item_nav"><a class="nav-item" href="https://covid19.gov.vn/">Tin Tức</a></li>
                </ul>
                <a class="btn btn_login" type="submit" href="login.php">Đăng nhập</a>
            </div>
        </nav>
    </header>
    <!-- end header -->

    <!-- header inner -->
    <div class="full_bg" id="myPage">
        <div class="container">
            <div class="row">
                <div class="photog">
                    <h1>Học viện công nghệ <br>
                        Bưu chính viễn thông<br>
                    </h1>
                    <h5>Trường "đại học số đầu tiên" ở Việt Nam <br>
                        ứng dụng công nghệ 4.0 vào kiểm soát dịch bệnh...</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- about -->
    <div class="about">
        <div class="container_width">
            <div class="row d_flex">
                <div class="col-lg-7">
                    <div class="titlepage text_align_left">
                        <h2>Covid-19 là gì?</h2>
                        <p>Tổ chức Y tế Thế giới (WHO) cho biết tên gọi chính thức của bệnh viêm đường hô hấp cấp do
                            chủng mới của vi-rút corona (nCoV) là Covid 19. Tên gọi mới này gọi tắt của coronavirus
                            disease 2019, theo các từ khóa “corona”, “virus”, “disease” (dịch bệnh) và 2019 là năm mà
                            loại virus gây đại dịch này xuất hiện.
                        </p>
                        <a class="read_more" href="https://vnvc.vn/virus-corona-2019/">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about_img text_align_center">
                        <figure><img src="images/about.png" alt="#" /></figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- cases -->
    <div class="cases">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text-center ">
                        <h2>Biểu đồ số ca nhiễm và phục hồi <br>
                            trên nước Việt Nam</h2>
                        <p>Số liệu mới nhất từ tổ chức y tế thế giới WHO</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <h2 class="title_cases">Số ca nhiễm</h2>
                    <iframe src="https://api.ncovtrack.com/vaccine/vietnam/provinces?metric=active&showTable=false&showMap=true" title="ncovtrack - COVID & Vaccination Statistics" height='500' width='600'></iframe>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                    <h2 class="title_cases">Số ca phục hồi</h2>
                    <iframe src="https://api.ncovtrack.com/vaccine/vietnam/provinces?metric=recovered&showTable=false&showMap=true" title="ncovtrack - COVID & Vaccination Statistics" height='500' width='600'></iframe>
                </div>
            </div>

        </div>
    </div>
    <!-- end cases -->

    <!-- coronata -->
    <div class="coronata">
        <div class="container">
            <div class="row d_flex grid">
                <div class="col-md-6">
                    <div class="coronata_img text-center">
                        <figure><img src="images/corona.png" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 oder1">
                    <div class="titlepage text_align_left">
                        <h2>Các triệu chứng khi nhiễm bệnh</h2>
                        <p>Các triệu chứng của bệnh nhân mắc Covid-19 từ nhẹ đến nặng bao gồm: sốt, ho và khó thở. Các
                            triệu chứng này có thể xuất hiện từ 02 đến 14 ngày sau khi tiếp xúc nguồn bệnh. Tới khi khởi
                            phát, Covid-19 gây sốt và có thể tổn thương đường hô hấp.
                        </p>
                        <a class="read_more" href="#">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end coronata -->

    <!-- Biện pháp -->
    <div class="text-center" style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text-center">
                        <h2>Biện pháp phòng tránh</h2>
                        <p class="title_solution">Cần thực hiện nghiêm túc chỉ thị 5K của chính phủ
                            đã đề ra
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner cevery_bg">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 slide_item">
                            <i><img src="images/pro1.png" alt="#" /></i>
                            <h3 class="">KHẨU TRANG</h3>
                            <p>
                                Đeo khẩu trang vải thường xuyên tại nơi công cộng, nơi tập trung đông người, đeo khẩu
                                trang y tế tại các cơ sở y tế, khu cách ly.
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/about-2.png" alt="#" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 slide_item">
                            <i><img src="images/pro2.png" alt="#" /></i>
                            <h3 class="">KHỬ KHUẨN</h3>
                            <p>
                                Rửa tay thường xuyên bằng xà phòng hoặc dung dịch sát khuẩn tay. Vệ sinh các bề mặt/ vật
                                dụng thường xuyên tiếp xúc (tay nắm cửa, điện thoại, máy tính bảng, mặt bàn, ghế…). Giữ
                                vệ sinh, lau rửa và để nhà cửa thông thoáng.
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/about-2.png" alt="#" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 slide_item">
                            <i><img src="images/pro4.png" alt="#" /></i>
                            <h3 class="">KHOẢNG CÁCH</h3>
                            <p>
                                Giữ khoảng cách khi tiếp xúc với người khác.
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/about-2.png" alt="#" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 slide_item">
                            <i><img src="images/pro3.png" alt="#" /></i>
                            <h3 class="">KHÔNG TỤ TẬP</h3>
                            <p>
                                Không tụ tập đông người.
                            </p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/about-2.png" alt="#" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 slide_item">
                            <i><img src="images/pro5.png" alt="#" /></i>
                            <h3 class="">KHAI BÁO Y TẾ</h3>
                            <p>
                                Thực hiện khai báo y tế trên App NCOVI; cài đặt ứng dụng BlueZone tại địa chỉ
                                https://www.bluezone.gov.vn được cảnh báo nguy cơ lây nhiễm COVID-19. Khi có dấu hiệu
                                sốt, ho, khó thở hãy gọi điện cho đường dây nóng của Bộ Y tế 19009095 hoặc cơ quan y tế
                                địa phương để được hướng dẫn đi khám bệnh an toàn.</p>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img src="images/about-2.png" alt="#" />
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <!-- doctors -->
    <div class="container title_doctor">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text-center">
                    <h2>Những con đường lây lan Covid-19</h2>
                </div>
            </div>
        </div>

        <div class="d_flex">
            <div>
                <figure class="rotate-image">
                    <img src="images/case.png" alt="" class="rotate-me">
                </figure>
            </div>
            <div class="row d_flex">
                <div class=" col-md-4">
                    <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="images/doctor1.png" alt="#" /></i>
                        <h3>BS Nguyễn Thị Hoa</h3>
                        <p>Hít vào không khí khi ở gần người bị nhiễm bệnh đang thở ra những giọt nhỏ và các hạt có chứa
                            vi-rút.</p>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="images/doctor2.png" alt="#" /></i>
                        <h3>BS Trần Diệu Thảo</h3>
                        <p>Để những giọt nhỏ và các hạt có chứa vi-rút rơi vào mắt, mũi hoặc miệng, đặc biệt là thông
                            qua sự bắn tóe và tia xịt như ho hoặc hắt hơi.</p>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div id="ho_efcet" class="reader text-center">
                        <i><img src="images/doctor2.png" alt="#" /></i>
                        <h3>BS Trần Diệu Thảo</h3>
                        <p>Hít vào không khí khi ở gần người bị nhiễm bệnh đang thở ra những giọt nhỏ và các hạt có chứa
                            vi-rút.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- end cases -->

    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="hedingh3  text_align_left">
                            <h3>Liên hệ</h3>
                            <ul class="top_infomation">
                                <li><i class="fa fa-map-marker"></i> 122 Hoàng Quốc Việt, Q.Cầu Giấy,
                                    Hà Nội.
                                </li>
                                <li><i class="fa fa-phone"></i> Call : 034 664 8888
                                </li>
                                <li><i class="fa fa-envelope"></i>
                                    <a>Email : congdq@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hedingh3 text_align_left">
                            <h3>Địa chỉ</h3>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6265.258238885546!2d105.78486111094526!3d20.978809834523915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdd8a1ad71%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNow61uaCB2aeG7hW4gdGjDtG5n!5e0!3m2!1svi!2sus!4v1637252590976!5m2!1svi!2sus" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a href="#myPage" title="To Top" class="to_top">
                            <i class="bi bi-arrow-up-circle"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <p>Đào Quang Công - B18DCCN057</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>