<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Status</th>
                <th scope="col">Category</th>
                <th>
                    <a href="<?= ADMIN_URL . "?ctl=addsp" ?>" class="btn btn-primary">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <th scope="row"><?= $product['id'] ?></th>
                    <td><?= $product['name'] ?></td>
                    <td>
                        <img src="<?= ROOT_URL . $product['image'] ?>" width="60" alt="">
                    </td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['quantity'] ?></td>
                    <td><?= $product['status'] ? 'Đang kinh doanh' : 'Ngừng kinh doanh' ?></td>
                    <td><?= $product['cate_name'] ?></td>
                    <td>
                        <a href="<?= ADMIN_URL . '?ctl=editsp&id=' . $product['id'] ?>" class="btn btn-primary">Cập nhật</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>