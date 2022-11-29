<?php

$conn = getDb();

function getImageURL(int $type) {
    $url = "";

    switch ($type) {
        case 1:
            $url = "images/shop/bracelets/";
            break;
        case 2:
            $url = "images/shop/necklaces/";
            break;
        case 3:
            $url = "images/shop/earrings/";
            break;
        case 4:
            $url = "images/shop/rings/";
            break;
        case 5:
            $url = "images/shop/watches/";
            break;
        case 6:
            $url = "images/mens/bracelets/";
            break;
        case 7:
            $url = "images/mens/chains/";
            break;
        case 8:
            $url = "images/mens/earrings/";
            break;
        case 9:
            $url = "images/mens/rings/";
            break;
        case 10:
            $url = "images/mens/watches/";
            break;
    }

    return $url;
} 

// Check if post request was made to add new item
if (isset($_POST['submit-product-form'])) {

    $product_type = (int)$_POST['product-type'];
    $sale = (isset($_POST['product-sale']) ? 0 : 1);

    $stat = $conn->prepare("INSERT INTO product(name, price, type, image, `desc`, alt_text, created_at, updated_at, stock, sale)
    VALUES(:name, :price, :type, :image, :desc, :alt_text, :created_at, :updated_at, :stock, :sale)");

    $target_dir = getImageURL($product_type);
    $target_file = $target_dir . basename($_FILES["product-img"]["name"]);

    move_uploaded_file($_FILES["product-img"]["tmp_name"], $target_file);

    $stat->execute([
        ':name' => $_POST['product-name'],
        ':price' => $_POST['product-price'],
        ':type' => $product_type,
        ':image' => $target_file,
        ':desc' => $_POST['product-desc'],
        ':alt_text' => $_POST['product-alt'],
        ':created_at' => date('Y-m-d'),
        ':updated_at' => date('Y-m-d'),
        ':stock' => $_POST['product-stock'],
        ':sale' => $sale
    ]);
}

// Get values for editing products table
$stat = $conn->prepare("SELECT id, name, price, type, image, `desc`, alt_text, stock, sale FROM product");
$stat->execute();
$result = $stat->fetchAll(PDO::FETCH_ASSOC);

// HTML frontend
echo '

<h1>Products</h1>
<p>View and manage your products</p>

<div class="add-product">
    <ul class="flex cards">
    <li>
        <h2>Add new product</h2>
        <form class="add-product-form" action="admin.php?page=products" method="post" enctype="multipart/form-data">
            <label for="product-name">Name:</label>
            <input type="text" name="product-name" id="product-name" required>
            <label for="product-price">Price: (£)</label>
            <input type="number" step="0.01" name="product-price" id="product-price" required>
            <label for="product-stock">Stock:</label>
            <input type="number" name="product-stock" id="product-stock" required>
            <label for="product-alt" id="product-alt">Alt-Text:</label>
            <input type="text" name="product-alt" id="product-alt" required>

            <label for="product-type">Type:</label>
            <select name="product-type" id="product-type">
                <option value="1">Women&apos;s bracelet</option>
                <option value="2">Women&apos;s necklace</option>
                <option value="3">Women&apos;s earrings</option>
                <option value="4">Women&apos;s ring</option>
                <option value="5">Women&apos;s watch</option>
                <option value="6">Men&apos;s bracelet</option>
                <option value="7">Men&apos;s chain</option>
                <option value="8">Men&apos;s earrings</option>
                <option value="9">Men&apos;s ring</option>
                <option value="10">Men&apos;s watch</option>
            </select>

            <div id="desc-box">
                <label for="product-desc">Description:</label>
                <textarea name="product-desc" id="product-desc" required></textarea>
                <label for="product-img">Select image:</label>
                <input type="file" id="product-img" name="product-img" accept="image/*" required>
            </div>

            <label for="product-sale" id="product-sale">Add to sale?:</label>
            <input type="checkbox" id="product-sale-chk" name="product-sale-chk" value="sale">

            <button id="submit-product-form" name="submit-product-form">Add product</button>
      </form>
    </li>
    </ul>
    <ul class="flex cards">
    <li>
        <h2>Edit existing product</h2>
        <div id="table-wrapper">
            <div id="table-scroll">
                <table id="existing-products" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price (£)</th>
                        <th>Type</th>
                        <th>Image URL</th>
                        <th>Description</th>
                        <th>Alt text</th>
                        <th>Stock</th>
                        <th>Sale?</th>
                    </tr>
                </thead>
                <tbody> '?>
                    <?php foreach ($result as $row) { ?>
                    <tr id="<?php echo $row["id"]; ?>">
                    <td contenteditable='true'><?php echo $row["id"]; ?></td>
                    <td contenteditable='true'><?php echo $row["name"]; ?></td>
                    <td contenteditable='true'><?php echo $row["price"]; ?></td>
                    <td contenteditable='true'><?php echo $row["type"]; ?></td>
                    <td contenteditable='true'><?php echo $row["image"]; ?></td>
                    <td contenteditable='true'><?php echo $row["desc"]; ?></td>
                    <td contenteditable='true'><?php echo $row["alt_text"]; ?></td>
                    <td contenteditable='true'><?php echo $row["stock"]; ?></td>
                    <td contenteditable='true'><?php echo $row["sale"]; ?></td>
                    </tr>
                    <?php } echo '
                </tbody>
            </table>
        </div>
    </div>
    <button id="apply-edits" name="apply-edits">Apply changes</button>
    </li>
    </ul>
</div>

'?>