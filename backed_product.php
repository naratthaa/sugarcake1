<?php include "./connect/connectdb.php" ?>


<!DOCTYPE html>
<html lang="th">

<head>
  <link rel="stylesheet" href="css/backed_product.css">
  <link rel="stylesheet" href="css/index.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>
</head>

<body>
<a href="#addproduct" data-toggle="modal" class="add">+ เพิ่มสินค้า</a>
  Launch demo modal
</button>
  <div class="bar">
    <div class="welcome">
    <a class="manage" href="backed_product.php"><span> สินค้า</span></a>
    <a class="manage" href="backed_category.php"><span> หมวดหมู่</span></a>
    <a class="manage" href="backed_set.php"><span> ชุดสินค้า</span></a>
    <a class="manage" href="backed_profile.php"><span> บัญชีผู้ใช้</span></a>
    <a class="manage" href="backed_customer.php"><span> ลูกค้า</span></a>
    <a class="manage" href="backed_staff.php"><span> พนักงาน</span></a>
    </div>
  </div>


  <div class="fullscreen">

    <div class="sidenav">
      <div class="row" id="row_profile">
        <div class="col-md-3"><img class="img_profile" src="img/user1.png" width="70" alt=""></div>
        <div class="col-md-9">
          <h6 style="margin-top: 25px;">Patnaree</h6>
        </div>
      </div>
      <a class="menu" href="backed_dash.php"><span><img src="img/icon_dash.png" width="20" alt=""> Dashboard</span></a>
      <a style="background-color: rgb(52, 190, 224);color: white !important;" class="menu" href="backed_product.php"><span><img src="img/icon_product.png" width="20" alt=""> จัดการข้อมูล</span></a>
      <a class="menu" href="backed_pos.php"><span><img src="img/icon_store.png" width="20" alt=""> ขายสินค้า (POS)</span></a>
      <a class="menu" href="backed_purchaseorder.php"><span><img src="img/icon_clipboard.png" width="20" alt=""> ข้อมูลการสั่งซื้อสินค้า</span></a>

      <a class="btn_logout" onclick="window.location='./logout.php'" href="#"><span><img src="img/icon_log.png" width="20" alt=""> ออกจากระบบ</span></a>
    </div>

    <div class="center">
      <div class="row">
        <!-- row2 -->

        <div class="col">
          <div class="row">



            <div class="col-md-1"></div>
            <div class="col-lg-10 col-xl-10 col-md-12 col-sm-12 col-12">
              <div class="row">

                <?php
                $sql = "SELECT * FROM product";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 col-12">
                    <div class="card">
                      <img src="<?php echo $row["pd_img"] ?>" width="430" height="280" class="card-img-top" alt="...">
                      <div class="card-body">
                        <span style="margin-top: -0.5em;"> <?php echo $row["pd_name"] ?></span>
                        <div class="row">
                          <div class="col">
                            <a href="#editpd<?php echo $row["pd_id"]; ?>" data-toggle="modal" class="btn_edit">แก้ไข</a>
                          </div>
                          <div class="col">
                            <a href="#deletepd<?php echo $row["pd_id"]; ?>" data-toggle="modal" class="btn_delete">ลบ</a>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php include('modal/modal.php'); ?>
                <?php } ?>

              </div> <!-- row  -->
            </div>
            <div class="col-md-1"></div>

          </div><!-- col-md-12 -->



        </div><!-- row2 -->
      </div>


    </div>
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