<?php
    require('_page_start.php');
?>
    <div class="col-10">
        <p class="lead mt-2"> Details </p>
        <hr>
   
        <?php  
            if (isset($_GET['id'])) {
                $orderQuery = "SELECT * from orders WHERE orders.id = :id AND orders.session = :session";
                if (isUserModerator()) {
                    $orderQuery = "SELECT * from orders WHERE orders.id = :id";
                }

                $stmt = $pdo->prepare($orderQuery);
                if (isUserModerator()) {
                    $stmt->execute(["id" => $_GET['id']]);   
                } else {
                    $stmt->execute(["id" => $_GET['id'], "session" => session_id()]);   
                }
                
                $order = $stmt->fetch();
                if ($order === false) {
                    echo 'Cannot access such order';
                } else {
                    if (isUserModerator()) {
                        $orderQuery = "UPDATE orders SET orders.reviewed = 1 WHERE orders.id = :id";
                        $stmt = $pdo->prepare($orderQuery);
                        $result = $stmt->execute(["id" => $_GET['id']]);   
                    }
                ?>
                <div class="form-control">
                    Order ID: <input type="text" value="<?php echo $order['id']?>" disabled>
                </div>
                <div class="form-control">
                    Product ID: <input type="text" value="<?php echo $order['product']?>" disabled>
                </div>
                <div class="form-control">  
                    Name: <input type="text" value="<?php echo $order['name'] ?>" disabled>
                </div>
                <div class="form-control"> 
                    Phone: <input type="text" value="<?php echo $order['phone']?>" disabled>
                </div>
                <div class="form-control">
                    Address: <input type="text" value="<?php echo $order['address']?>" disabled>
                </div>
            <?php
                }
            }
           ?>
    </div>
<?php
    require('_page_end.php');
?>
