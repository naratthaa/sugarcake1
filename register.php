<!-- <link rel="stylesheet" href="css/register.css"> -->
<link rel="stylesheet" href="css/navbar.css">

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content card_login">
            
                <h5 style="text-align:center !important;font-weight:bold;color: rgb(177, 11, 177);margin-top:1em; " class="modal-title" id="exampleModalLabel" class="header">ลงทะเบียนลูกค้า</h5>
               
           
            <div class="modal-body">
                <form enctype="multipart/form-data" action="connect/con_registercus1.php" method="post">
                    
                    <input class="form-control regis" type="text" name="fname" id="fname" placeholder="firstname" required>
                    
                    <input class="form-control regis" type="text" name="lname" id="lname" placeholder="lastname" required>
                    
                    <input class="form-control regis" type="text" name="username" id="username" placeholder="username" required>
                  
                    <input class="form-control regis" type="password" name="password" id="password" placeholder="password" required>
                  
                    <input class="form-control regis" type="password" id="repassword" placeholder="password again" required>
                  
                    <input class="form-control regis" type="email" name="email" id="email" placeholder="email" required>
                  
                    <input class="form-control regis" type="tel" name="tel" id="tel" placeholder="tel" required>
                  
                    <input class="form-control regis" type="date" name="BOD" id="BOD" placeholder="birthday" required>
                  
                    <input class="regis btnn" type="radio" name="gender" id="gender" value="1" checked>เพศชาย
                    <input class="regis btnn" type="radio" name="gender" id="gender" value="2" >เพศหญิง
                    <input class="regis btnn" type="radio" name="gender" id="gender" value="3" >อื่นๆ

                    <br>
                    <p class="lable_format"><b>รูปภาพส่วนตัว</b></p>
                    <input type="file" class="form-control regis" name="user_img" id="user_img" accept="image/*" onchange="loadFile1(event)">
                        <br>
                  
                    <input class="form-control regis" type="address" name="address" id="address" placeholder="ที่อยู่" required>
                  

                    <center><input class="btn btn-lg btn-success btn-block btn_login" type="submit" value="ลงทะเบียน" name="register" style="text-align:center"></center>


            </div>

           
            </form>
        </div>
    </div>
</div>