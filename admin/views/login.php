<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <title>Đăng Nhập</title>
  <style >
     body{
    margin: 0;
    padding: 0;
    background: url(../public/img/pic1.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}

  </style>
</head>
<body>
<div class="loginbox">
    <img src="../public/img/avatar.png" class="avatar">
        <h1>Đăng Nhập</h1>
        <form action="" method="POST" class="form login">
            <p>Tên đăng nhập</p>
            <input type="text" name="username" placeholder="Tên đăng nhập" required>
            <p>Mật khẩu</p>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <input type="submit" name="" value="Đăng nhập">
            <a href="#">Quên mật khẩu?</a><br>
            <a href="#">Bạn chưa có tài khoản?</a>
        </form>
        
    </div>
</body>
</html>