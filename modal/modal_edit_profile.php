<!--Modal แก้ไขสินค้า -->
<div class="modal fade" id="editprofile   <?php echo $row['user_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูลส่วนตัว</h4>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                include('./connect/connectdb.php');
                $edit = mysqli_query($conn, "SELECT * from user where user_id='" . $row['user_id'] . "'");
                $row = mysqli_fetch_array($edit);
                // $type_user = $row["user_status"];
                ?>
                <div class="container-fluid">
                    <form method="POST" enctype="multipart/form-data" action="./connect/con_edit_profile_user.php?user_id=<?php echo $row["user_id"] ?>">

                        <!-- <div style="height:10px;"></div>
                        <input type="file" id="pic_index" name="pic_index">
                        <div style="height:5px;"></div> -->
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">ชื่อผู้ใช้ :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="user_username" class="form-control" value="<?php echo $row['user_username']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">ชื่อ :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="user_fname" class="form-control" value="<?php echo $row['user_fname']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">สกุล :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="user_lname" class="form-control" value="<?php echo $row['user_lname']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">อีเมล :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="user_email" class="form-control" value="<?php echo $row['user_email']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">วันเกิด :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="date" name="user_birth" class="form-control" value="<?php echo $row['user_birth']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">เพศ :</label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="user_gender" class="form-control" value="<?php
                                                                                                    if ($row['user_gender'] == '1') {
                                                                                                        echo "ชาย";
                                                                                                    } elseif ($row['user_gender'] == '2') {
                                                                                                        echo "หญิง";
                                                                                                    } else {
                                                                                                        echo "อื่นๆ";
                                                                                                    }
                                                                                                    ?>" disabled>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label style="position:relative; top:7px;">ที่อยู่ :</label>
                            </div>
                            <div class="col-lg-7">
                                <textarea type="date" cols="35" rows="3" name="user_address" class="form-control"><?php echo $row['user_address']; ?></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>บันทึก</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>