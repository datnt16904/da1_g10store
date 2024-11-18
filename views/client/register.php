<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Ký</title>
</head>
<style>
    body {
        background-color: aqua;
        margin: 0px auto;
        font-family: Inter;
        width: 1440px;
        background-image: url("img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg");
        background-size: cover;
        background-position: center;
    }

    .container {
        width: 90%;
        height: 755px;
        margin: auto;
        display: flex;
    }

    .logo {
        width: 45%;
        height: 20%;
        text-align: center;
        margin: 300px 5% 300px 0%;
        -webkit-user-select: none;
        pointer-events: none;
        -webkit-user-drag: none;


    }

    .logo img {
        width: 70%;
        margin: auto;
        -webkit-user-select: none;
    }

    .forms {
        width: 40%;
        height: auto;
        margin: auto 5%;
        background-color: white;
        border: 3px solid #1F3A56;
        border-radius: 20px;

        text-align: center;
    }

    .forms .links {
        width: 80%;
        height: 35px;
        margin: 20px auto;
        display: flex;
        justify-content: left;

    }

    .links a {
        font-size: 16px;
        line-height: 35px;
        margin-right: auto;
        text-decoration: none;
        color: #1F3A56;
    }

    .links a:hover {
        text-decoration: underline;
    }

    .forms h2 {
        font-size: 35px;
        line-height: 40px;
    }

    .forms form {
        width: 80%;
        height: auto;
        margin: 10px auto;


    }

    form input {
        width: 70%;
        height: 20px;
        padding: 15px;
        margin: 15px;
        background-color: white;
        border: 2px solid #1F3A56;
        border-radius: 50px;
    }

    .forms .check {
        width: 70%;
        margin: 0px auto;
    }

    .check a {
        color: #1F3A56;
        text-decoration: none;
    }

    .check a:hover {
        text-decoration: underline;
    }


    .forms input[type="button"] {
        width: 135px;
        height: 50px;
        border: 2px solid #1F3A56;
        border-radius: 12px;
        font-size: 18px;
        color: #1F3A56;
        background-color: white;
        margin: 20px auto;
    }

    .forms input[type="button"]:hover {
        width: 135px;
        height: 50px;
        border: 2px solid #1F3A56;
        border-radius: 12px;
        font-size: 18px;
        color: white;
        background-color: #1F3A56;
        margin: 20px auto;
    }
</style>

<body>
    <div class="container">
        <div class="logo">
            <img src="img/G10 store - LOGO-.png" alt="">
        </div>
        <div class="forms">
            <div class="links">
                <a href="<?= ROOT_URL  ?>"> <- Quay Lại </a>
                        <div class="link">
                            Đã có tài khoản ?
                            <a href="<?= ROOT_URL .'?ctl=login' ?>">Đăng nhập</a>
                        </div>
            </div>
            <h2>Đăng Ký</h2>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Nhập tên tài khoản ở đây" required>
                <input type="text" name="user" placeholder="Nhập tên đăng nhập ở đây" required>
                <input type="text" name="email" placeholder="Nhập email ở đây" required>
                <input type="text" name="number" placeholder="Nhập số điện thoại ở đây" required>
                <input type="password" name="password" placeholder="Nhập mặt khẩu ở đây" required>
                <input type="password" name="repassword" placeholder="Nhập lại mặt khẩu ở đây" required>
            </form>
            <div class="check">
                <input type="checkbox" name="check" id="" aria-label="check" style="width: 15px; height: 15px;" required>
                <label for="check">Tôi Đồng ý Với</label>
                <a href="#">Điều khoản và dịch vụ </a>
            </div>
            <input type="button" value="Đăng ký" name="submit">


        </div>
    </div>
</body>

</html>