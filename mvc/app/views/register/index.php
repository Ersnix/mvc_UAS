<!DOCTYPE html>
<html>
<head>
    <title>Neuporism</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/register.css">
</head>

<body class="body">
    <center>
    <form action="<?= BASEURL ?>/register/prosesRegister" id="form" class="form"  method="post">
        <h2 id="tit" class="titb">Sign Up</h2>
        <div class="input">
            <div class="box">
                <label>Username</label>
                <input id="Username" type="text" name="username" placeholder="Username" autocomplete="off" autofocus="" required="">
            </div>
            <div class="box">
                <label>Password</label>
                <input id="password" type="Password" name="password" placeholder="........." required="">
                <a onclick="tampil()" href="#" id="tampil"></a>
            </div>
            <div class="box">
                <label>Alamat</label>
                <input id="alamat" type="text" name="alamat" placeholder="masukan alamat" required="" autocomplete="off">
                <a onclick="tampil()" href="#" id="tampil"></a>
            </div>
            <!-- <div class="box">
                <label>level</label><br>
                <select name="level" id="level">
                    <option>admin</option>
                    <option>petugas</option>
                    <option>user</option>
                </select>
            </div><br> -->
            <div class="box">
                <input type="submit" id="submit" class="submit1"  name="" value="Sign Up">
            </div>
        </div>
        <p>Sudah punya akun ? <a href="<?= BASEURL?>">Sign In</a></p>
    </form>
    </center>
    <div class="harus" id="harus">
        <center>
            <h2>Required Password</h2>
        </center>
        <div id="panjang" class="belum">
            <i id="char" class="fas fa-times-circle"></i>Password must be at least 8 characters
        </div>
        <div id="kapital" class="belum">
            <i id="upp" class="fas fa-times-circle"></i>Filled with at least one capital letter and small
        </div>
        <div id="simbol" class="belum">
            <i id="sym" class="fas fa-times-circle"></i>Contains At least One Symbol
        </div>
        <div id="angka" class="belum">
            <i id="num" class="fas fa-times-circle"></i>To be completed with at least one number
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="<?= BASEURL?>/javaScript/js.js"></script>