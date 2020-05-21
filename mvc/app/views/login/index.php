<?php
if (isset($_SESSION['register'])) {
    echo "<script>alert('register berhasil')</script>";

    unset($_SESSION['register']);
}
if (isset($_SESSION['status'])) {
    echo "<script>alert('username atau password salah!!')</script>";

    unset($_SESSION['status']);
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/register.css">
</head>

<body>
    <div class="body">
    <center>
    <form action="<?= BASEURL ?>/login/prosesLogin" id="form" class="form"  method="post">
        <h2 id="tit" class="tit">Sign In</h2>
        <div class="input">
            <div class="box">
                <label>Username</label>
                <input id="Username" type="text" name="username" placeholder="Username" autocomplete="off" autofocus="" required="">
            </div>
            <div class="box">
                <label>Password</label>
                <input id="password" type="Password" name="password" placeholder="........." required="">
                <a onclick="tampil()" href="#" id="tampil"></a>
            </div><br>
            <div class="box">
                <input type="submit" id="submit" class="submit"  name="" value="Sign In">
            </div>
        </div>
        <p>Tidak punya akun ? <a href="<?= BASEURL?>/register">Sign Up</a></p>
    </form>
    </center>
    </div>
    </body>
</html>
<script type="text/javascript" src="<?= BASEURL?>/javaScript/js.js"></script>