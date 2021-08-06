<!DOCTYPE html>
<html lang="en">

<head>
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
<link rel="stylesheet" href="css/index.css">
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
                    <a class="nav-link active nav_menu" style="color: rgb(255, 255, 255) !important;
    background-color:rgb(161, 115, 77) ;
    box-shadow: rgba(255, 255, 255, 0.562) 5px 5px 1px;" aria-current="page" href="index.php">หน้าหลัก</a>
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
                    <a class="nav-link nav_menu" href="contact.php">ติดต่อเรา</a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link" href="bakery_mycart.php"> 
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
        <div class="col" id="col1">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
             
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/bg1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/bg2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>

        </div><!--  col1 -->
      </div><!--  row1 -->

      <center><h3 class="text_title">สินค้าและบริการของเรา</h3></center>

      <div class="row" id="row2">
        <div class="col-md-2"></div>
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12 col-12">
          <div class="row">
          <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12">
            <div class="card card_index">
              <img src="img/cakechoc.png" height="400" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text" style="text-align: center;">เค้กช็อคหน้านิ่ม</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12">
            <div class="card card_index" >
              <img src="img/chetcake.png" height="400" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text" style="text-align: center;">ชีสเค้ก</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12">
            <div class="card card_index">
              <img src="img/pancake.png" height="400" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text" style="text-align: center;">แพนเค้ก</p>
              </div>
            </div>
          </div>
        </div> <!-- row  -->
        </div>
        <div class="col-md-2"></div>
      </div><!--  row2  -->

      <section id="bg_img" style=" background-image: url('img/worpaper.jpg'); ">
        <span style="width: 100%; text-align:center;font-size:0.5em;"><b >" ทางร้านใส่ใจในทุกกระบวนการทำ<br> เพื่อให้ลูกค้าของเราได้รับในสิ่งที่ดีที่สุด<br> และประทับใจที่สุด "</b>
      
    </section>

    <div class="row row3">
    <div class="col-md-2"></div>
      <div class="col-md-4">
        <img class="img_store" src="img/cafe1.jpg" alt="" width="100%">
      </div>
      <div class="col-md-4">
      <h4 style="text-align: center; color:rgb(129, 113, 88);line-height:1.5;margin-top:9em;">• Coffee in one hand, Confidence <br> in the other.</h4>
      </div>
      <div class="col-md-2"></div>
    </div>

    <div class="row row4">
    <div class="col-md-2"></div>
      <div class="col-md-4">
        <h4 style="text-align: center; color:rgb(129, 113, 88);line-height:1.5;margin-top:9em;">• Be the reason someone smile today.</h4>
      </div>
      <div class="col-md-4">
        <img class="img_store" src="img/cafe2.jpg" alt="" width="100%">
      </div>
      <div class="col-md-2"></div>
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