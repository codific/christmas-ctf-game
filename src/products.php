<?php
    require('_page_start.php');
?>
    <div class="col-7">
        <p class="lead mt-2"> Products </p>
        <hr>
        <form action="products.php" method="POST">
            <input type="search" placeholder="Type keyword and press enter.." class="mt-1 w-50" name="search">
        </form>
            <div class="d-flex text-center flex-row justify-content-around flex-wrap mt-1">
                <?php
                    if (isset($_POST['search'])) {
                        $productsQuery = "SELECT * from products where products.name LIKE :name AND products.hidden = false";
                        $stmt = $pdo->prepare($productsQuery);
                        $stmt->execute(["name" => "%" . $_POST['search'] . "%"]);    
                    } else {
                        $productsQuery = "SELECT * FROM products WHERE products.hidden = false";
                        $stmt = $pdo->query($productsQuery);
                    }
                    $products = $stmt->fetchAll();
                    if (sizeof($products) === 0) {
                        echo 'No products found by this criteria.';
                    }
                    foreach ($products as $product) {
                ?>
                    <div class="product-container m-2">
                        <div><?php echo $product['name']; ?></div><br>
                        <div><img src=<?php echo $product['path']; ?> width="150" height="150"></div>
                        <div>Price: <?php echo $product['price']; ?> EUR </div><br>
                        <div>Quantity: <?php echo $product['stock']; ?>  </div><br>
                        <div><a href="buy.php?id=<?php echo $product['id'] ?>" class="btn btn-sm btn-info"> BUY </a></div><br>
                    </div>
                <?php
                    }
                ?>
            </div>
    </div>
    <div class="col-2">
        <div class="mt-1 text-muted text-center">
            The team is giving out a promocode! You can thank them in the 'About us' page! <u>Enter this for 25% discount - CHRISTMAS22</u>
        </div>
    </div>
<?php
    require('_page_end.php');
?>
