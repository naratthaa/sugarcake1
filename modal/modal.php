<!-- modal ลบสินค้า  -->
<div class="modal fade de" id="deletepd<?php echo $row['pd_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="modaldel">
                <h5 class="modal-title" id="myModalLabel">เตือนการลบสินค้า</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                include('./connect/connectdb.php');
                $del = mysqli_query($conn, "select * from product where pd_id='" . $row['pd_id'] . "'");
                $row = mysqli_fetch_array($del);

                ?>
                <div class="container-fluid">
                    <h5>
                        ต้องการลบสินค้า : <span style="color:red;font-size:1.5em"><?php echo $row['pd_name']; ?></span>
                    </h5>
                </div>
                <!-- <div class="container-fluid">

                    <h5>
                        <strong><img width="250" height="400" class="card-img-top" src="img/<?php echo $row['pd_img']; ?> " /></strong>
                    </h5>
                </div> -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                <a href="./connect/con_delete_emp.php?pd_id=<?php echo $row['pd_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> ลบ</a>
            </div>

        </div>
    </div>
</div>


<!--Modal แก้ไขสินค้า -->
<div class="modal fade ee" id="editpd<?php echo $row['pd_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h5 class="modal-title" id="myModalLabel">แก้ไขข้อมูลสินค้า</h5>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "SELECT * from product where pd_id='" . $row['pd_id'] . "'");
                $row = mysqli_fetch_array($edit);
                $type_product = $row["cat_id"];
                ?>
                <div class="container-fluid">
                    <form enctype="multipart/form-data" action="./connect/con_edit_product.php?pd_id=<?php echo $row["pd_id"]?>" method="POST">

                        <center> <img src="img/<?php echo $row["pd_img"] ?>" style="display:inline" id="showpdimg" alt="" width="150px" class="imglogin"></center>

                        <div style="height:10px;"></div>
                        <input type="file" id="pic_index" name="pic_index">
                        <div style="height:5px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">ชื่อสินค้า :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="pd_name" class="form-control" value="<?php echo $row['pd_name']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">ราคาต่อชิ้น :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="pd_price" class="form-control" value="<?php echo $row['pd_price']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px; width:200%;">เวลาในการเก็บสินค้า :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="pd_des" class="form-control" value="<?php echo $row['pd_des']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px; width:200%;">ประเภทสินค้า:</label>
                            </div>
                            <div class="col-lg-7">
                                <select id="category" class="form-control" name="category" required>
                                    <option hidden value="0" style="color:gray">เลือกประเภทสินค้า</option>
                                    <!-- <option value="1">111</option> -->
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * from category ");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        if ($row["cat_id"] == $type_product) {
                                            echo "<option selected value='" . $row['cat_id'] . "'>" . $row['cat_name'] . "</option>";
                                        } else {
                                            echo "<option value='" . $row['cat_id'] . "'>" . $row['cat_name'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span>บันทึก</button>
            </div>
            </form>
        </div>
    </div>
</div>





<!-- Add product -->
<div class="modal fade ad" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">เพิ่มรายการสินค้า</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="col">
                <form action="./connect/con_add_product.php" method="POST" enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-9">
                            <input type="file" width="2px" class="form-control-file" name="pic_index" accept="image/*" onchange="loadFile1(event)" required>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <label style=" float:right">ชื่อสินค้า :</label>
                        </div>
                        <div class="col-lg-7">
                            <input class="form-control" type="text" placeholder="ex : เค้กส้ม" name="pd_name" maxlength="20" required>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <label style=" float:right">ราคาต่อชิ้น :</label>
                        </div>
                        <div class="col-lg-7">
                            <input class="form-control" type="text" placeholder="ใส่เฉพาะเลขราคา ex : 50" name="pd_price" maxlength="20" required>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <label style=" float:right">ระยะเวลาเก็บสินค้า :</label>
                        </div>
                        <div class="col-lg-7">
                            <input class="form-control" type="text" placeholder="ใส่เฉพาะเลขจำนวนวัน ex : 7" name="pd_des" maxlength='10' required>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>

                    <div class="row mt-3">
                            <div class="col-lg-4">
                                <label style="float:right;  ">ประเภทสินค้า:</label>
                            </div>
                            <div class="col-lg-7">
                                <select id="category" class="form-control" name="category" required>
                                    <option hidden value="0" style="color:gray">เลือกประเภทสินค้า</option>
                                    <!-- <option value="1">111</option> -->
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * from category ");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        if ($row["cat_id"] == $type_product) {
                                            echo "<option selected value='" . $row['cat_id'] . "'>" . $row['cat_name'] . "</option>";
                                        } else {
                                            echo "<option value='" . $row['cat_id'] . "'>" . $row['cat_name'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    
                    <div class="row" style="margin-top: 10px;margin-bottom: 20px;">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">เพิ่ม</button>
                            <button type="reset" class="btn btn-light" >รีเซ็ต</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Add category -->
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">เพิ่มหมวดหมู่สินค้า</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="col">
                <form action="./connect/con_add_category.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <label style=" float:right">ชื่อหมวดหมู่สินค้า :</label>
                        </div>
                        <div class="col-lg-7">
                            <input class="form-control" type="text" placeholder="ex : โรล" name="cat_name" maxlength="20" required>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    

                 
                    
                    <div class="row mt-3">
                        <div class="col">
                            <button type="reset" class="btn btn-light float-right" style="color:black">ยกเลิก</button>
                            <button type="submit" class="btn btn-primary float-right">เพิ่ม</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

