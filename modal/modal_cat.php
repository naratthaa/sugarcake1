<div class="modal fade de" id="deletecat<?php echo $row['cat_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="modaldel">
            <h5 class="modal-title" id="myModalLabel">เตือนการลบสินค้า</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                include('./connect/connectdb.php');
                $del = mysqli_query($conn, "select * from category where cat_id='" . $row['cat_id'] . "'");
                $fetch = mysqli_fetch_array($del);

                ?>
                <div class="container-fluid">
                    <h5>
                        ต้องการลบหมวดหมู่ : <span style="color:red;font-size:1.5em"><?php echo $row['cat_name']; ?></span>
                    </h5>
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                <a href="./connect/con_delete_category.php?cat_id=<?php echo $row['cat_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> ลบ</a>
            </div>

        </div>
    </div>
</div>


<!-- modal edit category  --> 
<div class="modal fade ee" id="editcat<?php echo $row['cat_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel">แก้ไข</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "SELECT * from category where cat_id='" . $row['cat_id'] . "'");
                $row = mysqli_fetch_array($edit);
                // $type_product = $row["cat_id"];
                ?>
                <div class="container-fluid">
                    <form enctype="multipart/form-data" action="./connect/con_edit_category.php?cat_id=<?php echo $row["cat_id"]?>" method="POST">

                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">ชื่อหมวดหมู่สินค้า :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="cat_name" class="form-control" value="<?php echo $row['cat_name']; ?>">
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

<!-- Add category -->
<div class="modal fade de" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                
                    <div class="row mt-3 " style="margin-top: 10px;margin-bottom: 20px;">
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

