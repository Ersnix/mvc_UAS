<?php
if ($_SESSION['status'] != 'login') {
    header('location:' . BASEURL);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/register.css">
    <title>Home</title>
</head>

<body>
    <center>

        <h1 class="green">Welcome " USER "</h1>
        <br>
        <div id="text" class="sudah"></div><br><br><br>
        <a class="logout" href="<?= BASEURL ?>/home/logout" onclick="return confirm('yakin ingin logout?')">Log out</a>
    </center>
</body>

</html>
<script type="text/javascript">
var a = 0;
var tx = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
var speeed = 50;
window.onload = function () {
    typeWriterr();
}
function typeWriterr() {
  if (a < tx.length) {
    document.getElementById("text").innerHTML += tx.charAt(a);
    a++;
    setTimeout(typeWriterr, speeed);
  }else{
    let a=0;
  }

}

</script>
