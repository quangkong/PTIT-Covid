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
   <!-- style css -->
   <link rel="stylesheet" href="../css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="../images/fevicon.png" type="../image/gif" />
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
                  <th scope="col">Tên Vacxin</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Địa điểm tiêm</th>
                  <th scope="col">Thời gian</th>
                  <th scope="col">Đăng ký</th>
               </tr>
            </thead>
            <tbody>
               <?php
               include_once('../connect/dbhelp.php');

               $sql = "SELECT * FROM lichtiem";
               $rows = requestTable($sql);
               for ($i = 0; $i < count($rows); $i++) {
                  echo
                  '<tr>
                        <th scope="row">' . ($i + 1) . '</th>
                     <td>' . $rows[$i]['namevaccine'] . '</td>
                     <td>' . $rows[$i]['quantity'] . '</td>
                     <td>' . $rows[$i]['address'] . '</td>
                     <td>' . $rows[$i]['date'] . '</td>
                     <td><button type="button" class="btn btn-success" name="edit" onclick=window.open("check_register_injection.php?id=' . $rows[$i]['id'] . '","_self")>Đăng ký</button><td>
                  </tr>';
               }
               ?>
            </tbody>
         </table>
      </div>
   </div>
   <!-- end cases -->

   <!-- Javascript files-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>