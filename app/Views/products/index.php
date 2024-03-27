<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <h1>Products</h1>
    <?= form_open('products/search') ?>
    <label for="keyword"></label>
    <input type="text" placeholder="Search" name="keyword">
    <input type="submit" value="Submit">
    <?= form_close() ?>
    <?php foreach ($products as $product): ?>
        <table>
            <tr>
                <td>
                    <?= $product['name'] ?>
                </td>
                <td>
                    <?= $product['qty'] ?>
                </td>
                <td>
                    <a href="<?= base_url('products/edit/' . $product['id']) ?>">Edit</a>
                </td>
                <td>
                    <a href="<?= base_url('products/view/' . $product['id']) ?>">Show</a>
                </td>
                <td>
                    <form action="<?= base_url('products/delete/' . $product['id']) ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </table>

    <?php endforeach; ?>
    <p><a href="<?= base_url('products/create') ?>">New product</a></p>
</body>

</html>

<!-- <h2><a href="?= base_url('products/show/') . $product['id'] ?>">?= $product['name'] ?> </a></h2>
        <p>Quantit?= $product['qty']?></p> -->