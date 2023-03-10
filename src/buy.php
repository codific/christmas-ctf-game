<?php
    require('_page_start.php');
?>
    <div class="col-7">
        <p class="lead mt-2"> Details about your order </p>
        <hr>
        <form action="buy.php" method="POST">
        <?php
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $productQuery = "SELECT * FROM products WHERE products.id = :id";
                $stmt = $pdo->prepare($productQuery);
                $stmt->execute(["id" => $id]);
                $product = $stmt->fetch();
                if ($product === false || $product['stock'] === 0 || $product['hidden']) {
                    echo 'Product is missing';
                    exit;
                }

                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $sql = "INSERT INTO orders (product, name, phone, address, session) VALUES (:product, :name, :phone, :address, :session)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['product' => $id, 'name' => $name, 'phone' => $phone, 'address' => $address, 'session' => session_id()]);
                
                echo "<div class='text-muted'>Thank you. <br><br>
                Your order has been placed. You can see the status in the 'Orders' menu.
                <br>
                A moderator typically reviews the new orders manually every minute, so expect it to ship as soon as possible.
                <br><br>
                Happy Holidays! </div><hr>";
            }
            if (isset($_GET['id'])) {
                $sqlLoginQuery = "SELECT * from products where products.id = :id";
                $stmt = $pdo->prepare($sqlLoginQuery);
                $stmt->execute(["id" => $_GET['id']]);   
                $product = $stmt->fetch();
                        
        ?>
            <input type="hidden" name="id" value=<?php echo $product['id']?>>
            <div class="form-control">
                    <img src=<?php echo $product['path']; ?> width="150" height="150">
            </div>
            <div class="form-control">
                ID: <input type="text" value=<?php echo $product['id']?> disabled>
            </div>
            <div class="form-control"> Product: 
                <input type="text" class="w-50" value=<?php echo $product['name']?> disabled>
            </div>
            <div class="form-control"> Price:
                <input type="text" class="w-50" value=<?php echo $product['price']?> disabled>
            </div>
            <div class="form-control"> Name:
                <input type="text" name="name" class="w-50">
            </div>
            <div class="form-control"> Phone:
                <input type="text" name="phone" class="w-50">
            </div>
            <div class="form-control"> Address:<br>
                <textarea name="address" class="w-100"> </textarea>
            </div>
            <div class="form-control"> Promocode:
                <input type="text" name="promo">
            </div>
            <?php 
                if ($product['stock'] > 0 && $product['hidden'] == 0) {
            ?>
                <input type="submit" class="btn btn-block w-100 btn-info mt-1" value="Buy" name="submit">
            <?php
                }
            }
            ?>
        </form>
    </div>
    <div class="col-2">
        <div class="mt-1 text-muted text-center">
            The team is giving out a promocode! You can thank them in the 'About us' page! <u>Enter this for 25% discount - CHRISTMAS22</u>
        </div>
    </div>
<?php
    require('_page_end.php');
?>
