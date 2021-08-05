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
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/outsite.css">
  <link rel="stylesheet" href="css/navbar.css">

  <title>Document</title>

  <script>
    let num = 0;
    let product = {}

    function addtocart(pd_id) {

      if (num == 3) {
        alert("จำนวนสินค้าในชุดครบแล้ว")
        return
      }
      let cart = document.getElementById("inset");
      if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
      } else {
        xmlhttp = new ActiveXOject("Microsoft.XMLHTTP");
      }

      let count = 0;
      xmlhttp.onreadystatechange = function() {

        if (xmlhttp.responseText != "" && count == 0) {
          count++;
          cart.innerHTML += xmlhttp.responseText;
          if (pd_id in product) {
            product[pd_id] = product[pd_id] + 1
          } else {
            product[pd_id] = 1;
          }
          num++
        }


        // let num = cart.childElementCount + 1;

      }
      console.log(product)
      xmlhttp.open("GET", "./setController.php?insert&pd_id=" + pd_id, true);
      xmlhttp.send();
    }


    function delproduct(pd_id) {
      if (confirm("คุณต้องการลบสินค้าใช่หรือไม่ ?")) {
        document.getElementById("div_" + pd_id).remove()
        num--
      } else {
        return
      }
    }

    function savetocart() {
      if (num != 3) {
        alert("กรุณาเลือกสินค้าให้ครบ 3 ชิ้น")
        return
      } else {
        if (window.XMLHttpRequest) {
          xmlhttp = new XMLHttpRequest();
        } else {
          xmlhttp = new ActiveXOject("Microsoft.XMLHTTP");
        }

        let count = 0;
        xmlhttp.onreadystatechange = function() {

          if (xmlhttp.responseText != "" && count == 0) {
            count++;
            if(xmlhttp.responseText=="success"){
              location.reload();
            }
          }


          // let num = cart.childElementCount + 1;

        }
        str_pd = ""
        str_qty = ""
        x = 0
        for (i in product) {
          if (x == 0) {
            str_pd += i
            str_qty += product[i]
          } else {
            str_pd += "," + i
            str_qty += "," + product[i]
          }
          x++
        }
        console.log("./setController.php?save&pd_id=" + str_pd + "&qty=" + str_qty)
        xmlhttp.open("GET", "./setController.php?save&pd_id=" + str_pd + "&qty=" + str_qty, true);
        xmlhttp.send();

      }
    }
  </script>
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
                <a class="nav-link nav_menu" style="color: rgb(255, 255, 255) !important;
    background-color:rgb(161, 115, 77) ;
    box-shadow: rgba(255, 255, 255, 0.562) 5px 5px 1px;" href="outsite.php">ชุดนอกสถานที่</a>
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

<br><br><br><br><br>
    <div class="row" style="margin-bottom: 3em;">

      <!-- <div class="col-md-2"></div>
      <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12 col-12">
        <div class="row">
          <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">
            <button id="choice" type="button" class="btn btn-dark">ขนม</button>
            <button id="choice" type="button" class="btn btn-dark">เครื่องดื่ม</button>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div> -->

      <center><img src="img/tutor.jpg" style="width:60%; "  alt=""></center>
      <center>
        <h3 class="text_title" style="margin-top: 3em;">เลือกจัดชุดสินค้า</h3>
      </center>
      


      <div class="left">


        <a class="nav-link dropdown-toggle nav_type" href="#เบเกอรี่" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          ประเภทสินค้า</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item nav_menu" href="bakery_cake.php">เค้ก</a></li>
          <li><a class="dropdown-item nav_menu" href="bakery_roll.php">โรล</a></li>
          <li><a class="dropdown-item nav_menu" href="bakery_thai.php">ขนมไทย</a></li>
        </ul>


        <div class="row">

          <?php
          $sql = "SELECT * FROM product";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <div class="col-md-3" onclick="addtocart(<?php echo $row['pd_id'] ?>)">
              <div class="card card_pd">
                <img src="<?php echo $row["pd_img"] ?>" height="180" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text namepd" style="text-align: center;"><?php echo $row["pd_name"] ?></p>
                </div>
              </div>
            </div>
          <?php }
          ?>

        </div>

      </div>



      <div class="right">
<h2 class="set_name" style="margin-top: 0.1em;">รายละเอียดสินค้าในชุด</h2>
        <div class="row row_pdselect">
          
          
        <div class="col-md-1">
           
           </div>

          <div class="col-md-5" id="inset">
           
          </div>


          <div class="col-md-6">
        

<center>
        <table style="margin-top: 8em;margin-left:3em;">
          <tr>
            <td class="float" style="text-align: center;">จำนวนชุดสินค้า</td>
            </tr>   
            <tr>
            <td class="td" >
              <form name=form1 style="margin-bottom: 4em;" >
                <input class="btn-de" type=button value=" - " onclick="document.form1.input1.value--">
                <input class="btn-num" id="qtyset" name=input1 value="1" size=4 style="text-align: center;" onfocus="buffer=this.value" onchange="if (isNaN(this.value)) {this.value=buffer}">
                <input class="btn-pl" type=button value=" + " onclick="document.form1.input1.value++">
              </form>
            </td>
            <td>
              <button type="button" onclick="savetocart()" style="margin-top: 4em;margin-left:-8em;" class="btn btn-outline-secondary btn-lg"> เพิ่มไปยังรถเข็น</button>
            </td>
          </tr>
        </table>
</center>
       
        

</div>
</div>
      </div>



      </section> <!--  navbar  -->
    </div>




</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>