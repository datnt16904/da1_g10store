<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<style>
    body {
            font-family: inter;
            margin: 0px auto;
            width: 1440px;
            padding:0 100px;
        }

        
        header .buttons {
            height: 100%;
            line-height: 50px;
            margin-right: 3%;
        }

        header .buttons a {
            width: 145px;
            padding: 15px 25px 15px 25px;
            background-color: white;
            color: #1F3A56;
            border: 1px solid #1F3A56;
            text-decoration: none;
            border-radius: 15px;
        }

        header .buttons a.a2 {
            width: 145px;
            padding: 15px 25px 15px 25px;
            background-color: #1F3A56;
            color: white;
            border: 1px solid white;
            text-decoration: none;
            border-radius: 15px;
        }

        header .buttons a:hover {
            width: 145px;
            padding: 15px 25px 15px 25px;
            background-color: #1F3A56;
            color: white;
            border: 1px solid white;
            text-decoration: none;
            border-radius: 15px;
        }

        header .buttons a.a2:hover {
            width: 145px;
            padding: 15px 25px 15px 25px;
            background-color: white;
            color: #1F3A56;
            border: 1px solid #1F3A56;
            text-decoration: none;
            border-radius: 15px;
        }
</style>
</head>

<body>
    <header>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= ROOT_URL ?>">
                <img src="img/Logo.png" alt="" height="60px" width="60px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= ROOT_URL ?>">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ROOT_URL . '?ctl=category&id=1' ?>">Sản phẩm</a>
                        </li>

                    </ul>
                    <div class="buttons">
            <a href="<?= ROOT_URL . '?ctl=login' ?>">Đăng nhập</a>
            <a href="<?= ROOT_URL . '?ctl=register' ?>" class="a2">Đăng ký</a>
        </div>
                </div>
            </div>
        </nav>
        </header>