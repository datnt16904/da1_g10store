<?php include_once ROOT_DIR . "views/client/header.php" ?>

<?php include_once ROOT_DIR . "views/client/slider.php" ?>


<div class="container mt-5">
    <h1>Điện thoại mới nhất</h1>
    <div class="row g-4">
        <?php foreach ($products as $product) : ?>
            <!-- Box Sản Phẩm -->
            <div class="col-md-3">
                <div class="product-box">
                    <img src="<?= $product['image'] ?>" alt="Product Image" class="product-img" width="150px">
                    <div class="product-info">
                        <a href="#">
                            <h5 class="product-name"><?= $product['name'] ?></h5>
                        </a>
                        <div>
                            <span class="product-price">
                                <?= number_format($product['price']) ?> vnđ
                            </span>
                        </div>
                        <div class="product-buttons">

                            <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <h1 class="mt-3">Sản phẩm cho điện thoại</h1>
    <div class="row g-4">
        <?php foreach ($list_products as $product): ?>
            <!-- Box Sản Phẩm -->
            <div class="col-md-3">
                <div class="product-box">
                    <img src="<?= $product['image'] ?>" alt="Product Image" class="product-img">
                    <div class="product-info">
                        <a href="#">
                            <h5 class="product-name"><?= $product['name'] ?></h5>
                        </a>
                        <div>
                            <span class="product-price">
                                <?= number_format($product['price']) ?> vnđ
                            </span>
                        </div>
                        <div class="product-buttons">

                            <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<br>
<?php include_once ROOT_DIR . "views/client/footer.php" ?>