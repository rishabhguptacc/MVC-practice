<?php

global $settings;

// print_r($data['products']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product add</title>
    <link rel="stylesheet" href="<?php echo $settings['siteurl']; ?>/assets/css/products.css">
</head>
<body>
    <!-- <p>This is add product template</p> -->
    <div id="wrapper">
        <?php if (isset($data['product'])) : ?>
            <form action="<?php echo $settings['siteurl']; ?>/products/update" method="post" id="add_product_form">
                <label for="id">PRODUCT ID : <input type="text" name="id" id="id" value="<?= $data['product']->id; ?>">  </label>
                <label for="id">PRODUCT NAME : <input type="text" name="name" id="name" value="<?= $data['product']->name; ?>">  </label>
                <label for="id">PRODUCT PRICE : <input type="text" name="price" id="price" value="<?= $data['product']->price; ?>">  </label>
                <p>
                    <input type="submit" value="Update Product" name="submit"> 
                </p>
            </form>
        <?php else : ?>
            <form action="<?php echo $settings['siteurl']; ?>/products/add" method="post" id="add_product_form">
                <label for="id">PRODUCT ID : <input type="text" name="id" id="id">  </label>
                <label for="id">PRODUCT NAME : <input type="text" name="name" id="name">  </label>
                <label for="id">PRODUCT PRICE : <input type="text" name="price" id="price">  </label>
                <p>
                    <input type="submit" value="Add Product" name="submit"> 
                </p>
            </form>
        <?php endif; ?>
        <div id="productList">
            <?php if (isset($data['products']) && sizeof($data['products'])) : ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>ACTION</th>
                    </tr>
                    <?PHP foreach ($data['products'] as $product) : ?>
                        <tr>
                            <td><?= $product->id; ?></td>
                            <td><?= $product->name; ?></td>
                            <td><?= $product->price; ?></td>
                            <td>
                                <a href="<?php echo $settings['siteurl']; ?>/products/edit/<?= $product->id; ?>" >EDIT </a>
                                &nbsp;
                                <a href="<?php echo $settings['siteurl']; ?>/products/delete/<?= $product->id; ?>" >DELETE </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
    
</body>
</html>