<?php
    require('_page_start.php');
?>
    <div class="col-10">
        <p class="lead mt-2"> Orders </p>
        <hr>
        <table class="table table-bordered mt-3">
            <thead>
                <th> Order ID </th>
                <th> Product ID </th>
                <th> Ordered by </td>
                <th> Phone </td>
                <th> Address </th>
                <th> Status </th>
                <th> Actions </th>
            </thead>
            <tbody>
                <?php 
                    $ordersQuery = "SELECT * FROM orders ORDER BY id DESC";
                    $stmt = $pdo->query($ordersQuery);
                    $orders = $stmt->fetchAll();

                    foreach ($orders as $order) {
                ?>
                    <tr>
                        <td>
                            <?php echo $order['id']; ?>
                        </td>
                        <td>
                            <?php echo $order['product']; ?>
                        </td>
                        <td>
                            *******
                        </td>
                        <td>
                            *******
                        </td>
                        <td>
                            *******
                        </td>
                        <td>
                            <?php 
                                if ($order['reviewed'] == 1) {
                                    $status = "reviewed";
                                    echo 'Reviewed';
                                } else {
                                    $status = "new";
                                    echo 'New';
                                }
                            ?>
                        </td>
                        <td>
                            <?php if ($order['session'] === session_id() || isUserModerator()) { ?>
                                <div><a class="order-details" data-status="<?php echo $status?>" href="order_details.php?id=<?php echo $order['id'] ?>"> See details </a></div>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
    </div>

<?php
    require('_page_end.php');
?>
