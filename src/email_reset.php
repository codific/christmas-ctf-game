<?php
    require('_page_start.php');
?>
   <div class="col-10">
        <p class="lead mt-2"> Reset password </p>
        <hr>
        <?php 
            if (isset($_POST['submit'])) {
                echo 'If that email exists we will send the password.';
            } else {
        ?>
            <form method="POST" class="mt-2">
                <div>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="mt-2">
                    <input type="submit" name="submit" value="Submit" class="btn btn-sm btn-info">
                </div>
            </form>
        <?php 
            } 
        ?>
    </div>
<?php
    require('_page_end.php');
?>