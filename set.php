<?php include "./connect/connectdb.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png">
  <link rel=”shortcut icon” href="img/icon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/set.css">

  <title>Document</title>
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
                <a class="nav-link nav_menu" style="color: rgb(255, 255, 255) !important;
    background-color:rgb(161, 115, 77) ;
    box-shadow: rgba(255, 255, 255, 0.562) 5px 5px 1px;" href="set.php">ชุดส่งสุดคุ้ม</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_menu" href="outsite.php">ชุดนอกสถานที่</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_menu" href="contact.php">ติดต่อเรา</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#ตะกร้าของฉัน">
                  <img class="icon_cart" src="img/cart.png" alt="" width="25">
                </a>
              </li>
              <li id="cart" class="nav-item">
                <a id="cart_text" class="nav-link nav_menu" href="#ตะกร้าของฉัน">ตะกร้าของฉัน</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">
                  <img class="icon_user" src="img/user.png" alt="" width="25">
                </a>
              <li id="user" class="nav-item">
                <a id="user_text" class="nav-link nav_menu" href="profile.php">โปรไฟล์</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> <!-- //nav// -->
    </section> <!--  navbar  -->



    <div class="row">

      <div class="col-md-1"></div>

      <div class="col-md-10">

        <center>
          <h3 class="text_title">ชุดส่งสุดคุ้ม</h3>
        </center>

        <div class="row " style="margin-bottom:5em;">

        <?php
                $n=1;
                $sql = "SELECT * FROM setbox";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
          <div class="col-md-6" id="box">
            <center>
              <h5 class="text_namepro"><?php echo $row["set_name"] ?></h5>
            </center>
            <div class="row">
              <div class="col-md-4">

                <img class="card-img-top" src="<?php echo $row["set_img"] ?>" height="170" alt="Card image cap">

              </div>
              <div class="col-md-8" id="detail">
                <table>
                  <tr>
                    <td class="float">ราคา</td>
                    <td class="float">:</td>
                    <td class="td"><?php echo $row["set_price"] ?> บาท</td>
                  </tr>
                  <tr>
                    <td class="float">ปริมาณ</td>
                    <td class="float">:</td>
                    <td class="td"><?php echo $row["set_qty"] ?> ชิ้น</td>
                  </tr>
                  <tr>
                    <td class="float" style="color: lightslategrey;">ราคาปกติ</td>
                    <td class="float" style="color: lightslategrey;">:</td>
                    <td class="td" style="color: lightslategrey;">25 บาท/ชิ้น</td>
                  </tr>
                  <!-- <tr>
                        <td class="float">วันหมดอายุ</td>
                        <td class="float">:</td>
                        <td class="td">หลังจาก  10 วัน (แช่เย็น)</td>
                      </tr> -->
                  <tr>
                    <td class="float">จำนวนชุด</td>
                    <td class="float">:</td>
                    <td class="td">
                      <form name=form1>
                        <input class="btn-de" type=button value=" - " onclick="document.form1.input1.value--">
                        <input class="btn-num" name=input1 value="1" size=4 onfocus="buffer=this.value" onchange="if (isNaN(this.value)) {this.value=buffer}">
                        <input class="btn-pl" type=button value=" + " onclick="document.form1.input1.value++">
                      </form>
                    </td>
                  </tr>
                </table>

                <center><button type="button" class="btn btn-outline-secondary btn-lg"> เพิ่มไปยังรถเข็น</button>
                </center>
              </div>
            </div>
          </div><!--  col-6  -->
          <?php include('modal/modal.php'); ?>
          <?php }
                ?>

          



          



        </div> <!-- row -->

      </div>
      <div class="col-md-1"></div>
    </div>



    </section>

    <footer class="footer">
      <h6 style="text-align: center; color: white; font-weight: bold; padding-top: 2%;">©2021 Sugar Cake All right reserved</h6>
    </footer>
  </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>