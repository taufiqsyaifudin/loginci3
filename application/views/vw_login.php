<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printsoft - Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
    <div class="container">
        <div class="login">
            <div class="logo">
                <img src="<?= base_url('assets/bahan/logo.png') ?>" alt="">
            </div>
            <form action="<?php echo base_url(); ?>index.php/login/proses" method="post">
                <h1>Sign In</h1>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Enter your username">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Enter your password">
                <label class="checkbox">
                    <input type="checkbox"> Remember me
                    <a style="margin-left: 30px;" href="#">Forgot Password?</a>
                </label>
                <button type="submit">Sign In</button>                
            </form>
        </div>
        <div class="right">
            <img class="ilustasi" src="<?= base_url('assets/bahan/illustration.png') ?>" alt="">
        </div>
    </div>
</body>

</html>