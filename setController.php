<?php 
include 'connect/connectdb.php';
session_start();
if(isset($_GET["insert"])){
    $pd_id = $_GET["pd_id"];
    $sql = "SELECT * FROM product WHERE pd_id = '$pd_id'";
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($result)){
        ?>
        <div class="card card_pdselect" style="margin-top: 1em;" id="div_<?php echo $row['pd_id'] ?>">
              <img src="<?php echo $row['pd_img'] ?>" height="150" style="object-fit: cover;"  class="card-img-top" alt="...">
              <div class="card-body">
                <center><button id="cart_text" class="nav-link btn_edit" onclick="delproduct(<?php echo $row['pd_id'] ?>)">ลบ</button></center>
              </div>
            </div>
        <?php
    }
}

if(isset($_GET["save"])){
    $username =   $_SESSION["user_username"];
    $pd_id=$_GET["pd_id"];
    $qty =$_GET["qty"];
    $price = 0;
    $pd_id = explode(",",$pd_id);
    $qty = explode(",",$qty);
    for($i=0 ;$i<count($pd_id);$i++){
        $pd = $pd_id[$i];
        $sql = "SELECT * FROM product WHERE pd_id = $pd";
        $result=mysqli_query($conn,$sql);
        $fetch = mysqli_fetch_array($result);
        $y = (int)$qty[$i];
        $x = $fetch["pd_price"]*$y;
        $price+=$x;
    }
    $price=$price-(($price*10)/100);
    $sql = "INSERT INTO setcus(user_username,setcus_price) VALUES('$username',$price)";
    mysqli_query($conn,$sql);
    $sql = "SELECT * FROM setcus WHERE user_username = '$username' ORDER BY setcus_id DESC LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $id = mysqli_fetch_array($result);
    $id = $id["setcus_id"];

    for($i=0;$i<count($pd_id);$i++){
        $pd = $pd_id[$i];
        $q = $qty[$i];
        $sql = "INSERT INTO setcusdetail(pd_id,qty,setcus_id) VALUES ($pd,$q,$id)";
        mysqli_query($conn,$sql);
    }
    echo "success";
}
?>