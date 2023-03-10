<?php
    require('_page_start.php');
?>
    <div class="col-10">
        <p class="lead mt-2"> Login </p>
        <hr>
        <?php 
            if (isset($_POST['submit'])) {
                echo 'No record found for ' . $_POST['username'];  
            }
        ?>
        <form method="POST" class="mt-2">
            <div>
                <input type="text" name="username" placeholder="username">
            </div>
            <div class="mt-2">
                <input type="text" name="password" placeholder="password">
            </div>
            <div class="mt-2">
                <input type="submit" class="btn btn-sm btn-info" name="submit" value="Submit">
            </div>
            <div class="mt-2">
                <small class="text-muted"><a href="lost_password.php?resetby=email_reset.php"> Reset password </a></small>
            </div>
        </form>
    </div>
<?php
    require('_page_end.php');
?>
