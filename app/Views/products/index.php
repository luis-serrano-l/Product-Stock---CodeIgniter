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
                <td class="qty-column">
                    <?= $product['qty'] ?>
                </td>
                <td class="add-subtract-buttons">
                    <form action="<?= base_url('products/add/' . $product['id']) ?>" method="POST">
                        <input type="hidden" name="name" value="<?= $product['name'] ?>" required>
                        <input type="hidden" step="1" min="1" name="qty" value="<?= $product['qty'] ?>" required>
                        <input type="submit" value="+">
                    </form>
                    <form action="<?= base_url('products/subtract/' . $product['id']) ?>" method="POST">
                        <input type="hidden" name="name" value="<?= $product['name'] ?>" required>
                        <input type="hidden" step="1" min="1" name="qty" value="<?= $product['qty'] ?>" required>
                        <input type="submit" value="-">
                    </form>
                </td>
                <td class="action-buttons">
                    <a href="<?= base_url('products/edit/' . $product['id']) ?>">Edit</a>
                    <a href="<?= base_url('products/view/' . $product['id']) ?>">Show</a>
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