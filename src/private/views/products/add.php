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
        <form action="<?php echo $settings['siteurl']; ?>/products/add" method="post" id="add_product_form">
            <label for="id">PRODUCT ID : <input type="text" name="id" id="id">  </label>
            <label for="id">PRODUCT NAME : <input type="text" name="name" id="name">  </label>
            <label for="id">PRODUCT PRICE : <input type="text" name="price" id="price">  </label>
            <p>
                <input type="submit" value="Submit" name="submit"> 
            </p>
        </form>

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
                                <a href="<?php echo $settings['siteurl']; ?>/products/edit">EDIT </a>
                                &nbsp;
                                <a href="<?php echo $settings['siteurl']; ?>/products/delete">DELETE </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
    
</body>
</html>