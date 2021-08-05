<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ddd -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png">
    <link rel=”shortcut icon” href="img/icon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/navbar.css">

</head>

<body>
    <div class="contain--fluid">

      <section id="navbar">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> 
                  <img src="img/logo.png" alt="" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active nav_menu" aria-current="page" href="index.php">หน้าหลัก</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav_menu" href="#เบเกอรี่" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      ประเภทสินค้า</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item nav_menu" href="bakery_cake.php">เค้ก</a></li>
                        <li><a class="dropdown-item nav_menu" href="bakery_roll.php">โรล</a></li>
                        <li><a class="dropdown-item nav_menu" href="bakery_thai.php">ขนมไทย</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav_menu" href="set.php">ชุดส่งสุดคุ้ม</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav_menu" href="outsite.php">ชุดนอกสถานที่</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav_menu" style="color: rgb(255, 255, 255) !important;
    background-color:rgb(161, 115, 77) ;
    box-shadow: rgba(255, 255, 255, 0.562) 5px 5px 1px;" href="contact.php">ติดต่อเรา</a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link" href="#ตะกร้าของฉัน"> 
                  <img class="icon_cart" src="img/cart.png" alt="" width="25">
                </a>
                  </li>
                  <li id="cart" class="nav-item">
                   <a id="cart_text" class="nav-link nav_menu"  href="#ตะกร้าของฉัน">ตะกร้าของฉัน</a>
                   </li>
                  <li class="nav-item">
                   <a class="nav-link" href="profile.php"> 
                    <img class="icon_user" src="img/user.png" alt="" width="25">
                  </a>
                  <li id="user" class="nav-item">
                     <a id="user_text" class="nav-link nav_menu"  href="profile.php">โปรไฟล์</a>
                  </li>
                </ul>
              </div>  
            </div>
          </nav> <!-- //nav// -->
        </section> <!--  navbar  -->

      <div class="row" id="row1">
        <div class="col-md-12" id="col1">
          <img width="100%" src="img/bg3.jpg" alt="">

        </div><!--  col1 -->
      </div><!--  row1 -->

     <center><h2 class="text_title">สามารถติดต่อเราได้ที่</h2></center>

     <div class="row row2">
     <div class="col-md-1"></div>
       <div class="col-md-10">
       <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.028006673814!2d102.82045211481326!3d16.474119488631956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a8dddfc8823%3A0xbe40583c7c5b2231!2sKhon%20Kaen%20University!5e0!3m2!1sen!2sth!4v1618683683871!5m2!1sen!2sth" width="100%" height="450" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
       </div>
       <div class="col-md-1"></div>
     </div>

     <div class="row row3" style="margin-top: 5em;">
     <div class="col-md-5"></div>
       <div class="col-md-2">
          <div class="row row3_1">
          <div class="col-md-4">
            <a href="#"><img class="img_icon" width="50" style="border-radius: 5px;" src="img/icon/facebook.png" alt=""></a>
          </div>
          <div class="col-md-4">
            <a href="#"><img class="img_icon" width="50" style="border-radius: 10px;" src="img/icon/instagram.png" alt=""></a>
          </div>
          <div class="col-md-4">
            <a href="#"><img class="img_icon" width="50" style="border-radius: 7px;" src="img/icon/line.png" alt=""></a>
          </div>
          </div>
       </div>
       <div class="col-md-5"></div>
     </div>


     
     <div class="row row4" style="margin-top: 5em;">
     <div class="col-md-1"></div>
        <div class="col-md-6" id="bg_img" style=" background-image: url('img/bg4.jpg');box-shadow: 20px 20px 1px rgb(247, 183, 183);">
         </div> 
       <div class="col-md-5">
       <h2  style="text-align: center; color:rgb(129, 113, 88);margin-top: 4em;">ที่อยู่ติดต่อ</h2>
          <h4 style="text-align: center; color:rgb(129, 113, 88);line-height:1.5;">เลขที่ 217 หมู่ 14 ตำบล หนองไม้งาม <br> อำเภอ บ้านกรวด จังหวัด บุรีรัมย์ 31180</h4>
       </div>
     </div>
     

      

    

      <footer class="footer">
        <h6 style="text-align: center; color: white; font-weight: bold; padding-top: 2%;">©2021 Sugar Cake All right reserved</h6>
      </footer>
    

    </div><!--  contain--fluid -->

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</html>