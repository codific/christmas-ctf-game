<?php
    require('_page_start.php');
?>
<div class="col-10">
    <?php 
        if (isset($_POST['submit'])) { 
            echo 'Thank you for your feedback';
        } else { 
    ?>
        <p class="lead mt-2"> Feedback </p>
        <hr>
        <form action="feedback.php" method="POST">
            <div class="mt-3">
                How likely are you to recommend us to your friend?
                <input type="radio" name="feedback" value="1">
                <input type="radio" name="feedback" value="2">
                <input type="radio" name="feedback" value="3">
                <input type="radio" name="feedback" value="4">
                <input type="radio" name="feedback" value="5">
            </div>
            <div class="mt-3">
                Is there anything else you would like to tell us?<br>
                <textarea cols="60" rows="5" name="feedback-text"></textarea>
            </div>
            <div class="mt-3">
                <input type="submit" name="submit" value="Send">
            </div>
        </form>
    <?php 
        }
    ?>
</div>
<?php
    require('_page_end.php');
?>
