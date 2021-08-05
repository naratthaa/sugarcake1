<?php include "./connect/connectdb.php" ?>


<!DOCTYPE html>
<html lang="th">

<head>
  <link rel="stylesheet" href="css/backed_set.css">
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
  <a href="#addproduct" data-toggle="modal" class="add">+ เพิ่มชุดสินค้า</a>
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

      <a class="btn_logout" href="#"><span><img src="img/icon_log.png" width="20" alt=""> ออกจากระบบ</span></a>
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
                $n=1;
                $sql = "SELECT * FROM setbox";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <!-- <p style="margin-top: -0.7em; color:teal;">ภายในเซตประกอบด้วย</p> -->
                        <div style="margin-top: -1em;">

                          <img src="<?php echo $row["set_img"] ?>" width="430" height="260" class="card-img" alt="...">
                          <p class="set_name"><?php echo $row["set_name"] ?></p>

                          <div class="text_box">
                          <?php
                          
                          $sql2 = "SELECT * FROM setbox INNER JOIN set_detail ON setbox.set_id=set_detail.set_id 
                          INNER JOIN product ON set_detail.pd_id=product.pd_id WHERE setbox.set_id=$n";
                          $result2 = mysqli_query($conn, $sql2);
                          while ($row2 = mysqli_fetch_array($result2)) {
                          ?>

                            <span style="margin-top: -1em;font-weight: bold;color:teal"> <?php echo $row2["pd_name"] ?></span><span style="float: right;font-weight: bold;">1 ชิ้น</span> <br>
                          <?php } $n++; ?>
                          </div>
                          <p class="set_price"><?php echo $row["set_price"] ?><span class="set_price"> บาท</span></p>
                        </div>
                        <div class="row" style="margin-top: 1em;">
                          <div class="col">
                            <center><a href="#" data-toggle="modal" class="btn_edit">แก้ไข</a></center>
                          </div>
                          <div class="col">
                          <center><a href="#" data-toggle="modal" class="btn_delete">ลบ</a></center>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php include('modal/modal.php'); ?>
                <?php }
                
                
                ?>


              </div> <!-- row  -->
            </div>
            <div class="col-md-1"></div>

          </div><!-- col-md-12 -->



        </div><!-- row2 -->
      </div>


    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>