<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  body {
    font-family: "Lato", sans-serif;
  }

    .main-head{
        height: 150px;
        background: #FFF;
       
    }

    .sidenav {
        height: 100%;
        background-color: #000;
        overflow-x: hidden;
        padding-top: 20px;
    }


    .main {
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
    }

    @media screen and (max-width: 450px) {
        .login-form{
            margin-top: 10%;
        }

        .register-form{
            margin-top: 10%;
        }
    }

    @media screen and (min-width: 768px){
        .main{
            margin-left: 40%; 
        }

        .sidenav{
            width: 40%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .login-form{
            margin-top: 80%;
        }

        .register-form{
            margin-top: 20%;
        }
    }


    .login-main-text{
        margin-top: 20%;
        padding: 60px;
        color: #fff;
    }

    .login-main-text h2{
        font-weight: 300;
    }

    .btn-black{
        background-color: #000 !important;
        color: #fff;
    }
</style>
<?php
  if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
      echo '<span style="color:blue; font-weight:bold">'.$value.'</span>';
    }
  } 
?>
<div class="sidenav">
         <div class="login-main-text">
            <h1>Đăng ký<br> DUT Library</h1>
            <h5>Đăng ký hoặc đăng nhập để truy cập</h5>
         </div>
      </div>
    <form method="POST" action="<?php echo BASE_URL ?>customer/insert_register">
      <div class="main" style="margin-top: -250px">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>Tên tài khoản</label>
                     <input type="text" name="username" required class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Mật khẩu</label>
                     <input autocomplete="off" type="password" name="password" required class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <label>Họ và tên</label>
                     <input type="text" name="customername" required class="form-control" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                     <label>Số điện thoại</label>
                     <input type="text" name="customerphone" required class="form-control" placeholder="Phone number">
                  </div>
                  <div class="form-group">
                     <label>Địa chỉ</label>
                     <input type="text" name="customeraddress" required class="form-control" placeholder="Address">
                  </div>
                  <input type="submit" class="btn btn-gui btn-danger" name="dangky" id="frmSubmit" value="Đăng ký"></input>
               </form>
            </div>
         </div>
      </div>
    </form>