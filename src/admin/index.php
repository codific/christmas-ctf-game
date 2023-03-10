<?php
    require_once('../config.php');
?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CTF</title>
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    </head>

    <body style="background-color: #b3e6ff;">
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { ?>
            <div class="text-muted text-center">
                CDF{9OoD_1NJ3C71oN_H4Xor3r}
            </div>
            <div class="w-100 text-center"> You are logged in. Click <a href="/admin/logout.php">here</a> to logout. </div>
            
            <div class="p-5 mt-3 team-messages">
                <h5> Team Messages </h5>
                <?php
                    $sqlLoginQuery = "SELECT * FROM messages ORDER BY messages.date DESC";
                    $stmt = $pdo->query($sqlLoginQuery);
            
                    $messages = $stmt->fetchAll();
                    foreach ($messages as $message) {
                ?>
                    <div class="text-muted mt-2">
                        <?php echo $message['date'] ?> @ <?php echo $message['name'] ?>: <?php echo $message['message'] ?> 
                    </div>
                <?php
                    }
                ?>
            </div>
        <?php } else { ?>
            <div class="text-center d-flex align-items-center justify-content-center w-100 h-100">
                <div class="row">
                    <div class="col-12">
                        <?php
                            if (isset($_SESSION['failedLogin']) && $_SESSION['failedLogin'] === true) {
                                unset($_SESSION['failedLogin']);
                                echo '<div class=\'text-danger\'>Wrong credentials. Please, try again or contact the administrator.</div>';
                            }
                        ?>

                        <?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === false) { ?>
                            <form action="/admin/login.php" method="POST">
                                    <input type="text" name="username" placeholder="username" required>
                                    <br><br>
                                    <input type="password" name="password" placeholder="password" required>
                                    <br><br>
                                    <input type="submit" name="submit" value="Login" class="btn btn-sm btn-success">
                                </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>

        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>
    </body>

</html> 
