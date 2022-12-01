<?php

include './functions.php';
$conn = getDb();



if (isset($_GET["q"])) {
    $conn = getDb();
    $stat = $conn->prepare("SELECT id, name, price, type, image, `desc`, alt_text FROM product WHERE name LIKE ?");
    $qstring = $_GET["q"];
    $stat->bindParam(1, $qstring, PDO::PARAM_STR);
    $stat->execute();
    $result = $stat->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stat->fetchAll();
} else {
    $result = array();
}
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php loadHeader(); ?>
     <div class="c">
    <main>
        <form method="GET">
            <br>
            <div>
                <input type="text" name="q" placeholder="Product Search" style="width: 100%" />
            </div>
            <br>
            <div>
                <input type="submit" class="btn btn-sm btn-success btn-block" value="Search" />
            </div>
            <br><br>
        </form>
        <?php

            // Displays all products
            // NOTE: ADD PRODUCTS TO THE DB FIRST
            foreach ($result as $row) {
            echo "<div class=\"content\">";
            echo "<div class=\"zoom\">";
            echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\"></a>";
            echo "</div>";
            echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><h3>" . $row["name"] . "</h3></a>";
            echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
            echo "<h6>£" . $row["price"] . "</h6>";
            echo "</div>";
            }
        ?>
    </main>
   <footer>
    <?php loadFooter(); ?>
    </footer>
</body>
    </html>
