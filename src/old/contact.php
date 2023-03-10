<?php
    require('../_page_start.php');
?>
    <div class="col-10">
        <p class="lead mt-2"> Contact </p>
        <hr>
        <form class="mt-2">
            <div>
                Email: <br>
                <input type="email" name="email">
            </div>
            <div class="mt-3">
                Message: <br>
                <textarea name="message" cols="60" rows="10"> </textarea>
            </div>
            <input type="submit" class="mt-3" value="Send" name='submit'>
        </form>
        <div class="text-center">
            <img src="images/webshop.webp" height="300" width="400">
        </div>
    </div>
<?php
    require('../_page_end.php');
?>
