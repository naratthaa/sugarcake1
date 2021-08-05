

<link rel="stylesheet" href="css/login.css">
<!-- <link rel="stylesheet" href="css/navbar.css"> -->

<div class="modal fade " id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content card_login modal_login">
          
                <h5 style="text-align:center !important;font-weight:bold;color: black;margin-top:1.5em; " class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ</h5>
                <!-- <button class="btnclose" type="button" data-dismiss="modal" aria-label="Close">
                    <span   aria-hidden="true">&times;</span>
                </button> -->
            
            <div class="bobo" style="margin-top: 3em;">
                <form action="connect/con_login.php" method="post">                  
                    <center><input style="width: 85%;" class="form-control log" type="text" name="user_username" id="user_username" placeholder="username" required>
                    <input style="width: 85%;" class="form-control log" type="password" name="user_pass" id="user_pass" placeholder="password" required>          
                    <input class="btn btn-lg btn-success btn-block btn_login" type="submit" value="เข้าสู่ระบบ" name="login"></center>
            </div>

            <div class="modal-body">
                <hr>
                <a class="register-link btn_register" class="close" data-dismiss="modal" aria-label="Close" style="text-decoration: underline;float:left;" data-toggle="modal" href="#con_register.php"><span aria-hidden="true">ลงทะเบียน</span></a>
                <a class="login-link btn_register" class="close" data-dismiss="modal" aria-label="Close" style="text-decoration: underline;float:right;" data-toggle="modal" href="#forgot.php"><span aria-hidden="true">ลืมรหัสผ่าน?</span></a>
            </div>
            </form>
        </div>
    </div>
</div>