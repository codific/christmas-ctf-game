<?php
    require('_page_start.php');
?>
    <div class="col-10">
        <p class="lead mt-2"> Reviews </p>
        <hr>
        Here you can see what other people say about us :) If you want to add something, do it through the feedback form.
        <?php
            $reviewsQuery = "SELECT * from reviews WHERE reviews.hidden = :hidden";

            if (!isset($_POST['submit'])) {
                $reviewsQuery .= " LIMIT 3";
            }

            $stmt = $pdo->prepare($reviewsQuery);
            $stmt->execute(["hidden" => $_POST['load'] ?? 0]);   
            $reviews = $stmt->fetchAll();

            foreach ($reviews as $review) {
        ?>
            <div class="text-muted mt-3"><?php echo $review['name'] ?> : <?php echo $review['comment'] ?></div>
        <?php 
            } 
        ?>

        <form method="POST" class="mt-2">
            <input type="submit" class="btn btn-sm btn-info" name="submit" value="Load more" <?= $_POST['submit'] ?? '' ? 'disabled' : '' ?>>
            <input type="hidden" name="load" value="0">
        </form>
        <div class="mt-5 w-100 text-center">
            <img src="images/webshop.webp" height="300" width="500">
        </div>
    </div>
<?php
    require('_page_end.php');
?>
