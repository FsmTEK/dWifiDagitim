<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Ekranı Sayfası</title>
    <scprit src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></scprit>
    <scprit src="<?php echo base_url('elz/login.js');?>"></scprit>
    <link rel="stylesheet" href="<?php echo base_url('elz/login.css');?>">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <h1>Welcome</h1>

        <form class="form">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <button type="submit" id="login-button">Login</button>
        </form>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
</body>
</html>