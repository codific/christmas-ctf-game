<?php
    require('_page_start.php');
?>
    <div class="col-10">
        <p class="lead mt-2"> About us </p>
        <hr>
        <div> Meet our amazing team! Nothing would be possible without them. </div>
        <div class="d-flex p-2 mt-2 justify-content-around flex-nowrap">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="images/no-avatar.png" class="bg-danger" height="100" width="100">
                    <h5 class="card-title">John D.</h5>
                    <p class="card-text">John is the founder. He is the hardest working member of the team!</p>
                    <a href="#" class="btn btn-primary">CEO</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="images/no-avatar-2.png" class="bg-info" height="100" width="100">
                    <h5 class="card-title">Alice A.</h5>
                    <p class="card-text">Alice is our UX guru! She has a really creative mind and gives interesting ideas.</p>
                    <a href="#" class="btn btn-dark">UX</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="images/no-avatar.png" class="bg-primary" height="100" width="100">
                    <h5 class="card-title">Bob B.</h5>
                    <p class="card-text">Bob is our shop moderator. He goes and checks every order that you place and ships it!</p>
                    <a href="#" class="btn btn-light">MOD</a>
                </div>
            </div>
        </div>

        <div class="d-flex p-2 justify-content-around flex-nowrap">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="images/no-avatar.png" class="bg-info" height="100" width="100">
                    <h5 class="card-title">Jack A.</h5>
                    <p class="card-text">Jack is our shop administrator. He goes in and adds new items to the catalogue! He also checks if everything is working as expected.</p>
                    <a href="#" class="btn btn-danger">ADM</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="images/no-avatar.png" class="bg-dark" height="100" width="100">
                    <h5 class="card-title">Greg A.</h5>
                    <p class="card-text">Greg is our software engineer. He develops very important and critical features. Consider following him on <a href="https://github.com/greg-ctrl"> GitHub </a></p>
                    <a href="#" class="btn btn-warning">DEV</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="images/no-avatar-2.png" class="bg-success" height="100" width="100">
                    <h5 class="card-title">Pat M.</h5>
                    <p class="card-text">Pat is our engineer intern. She works tightly with our seniors and designers and learns from their experience.</p>
                    <a href="#" class="btn btn-warning">DEV</a>
                </div>
            </div>
        </div>

        <br><br>
        <small class="text-muted">Currently we are not looking to hire new people, but come back in a few weeks to see if something changed. </small>
    </div>
<?php
    require('_page_end.php');
?>