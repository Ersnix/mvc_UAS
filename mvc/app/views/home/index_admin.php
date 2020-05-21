<?php
if ($_SESSION['status'] != 'login') {
    header('location:' . BASEURL);
}
?>
<!DOCTYPE html>
<html>

<head>
    
    
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>
<style type="text/css">
  .header{
    margin: 5px 5px;
    box-shadow: -2px -2px 6px rgba(255,255,255,0.1),
                     2px 2px 6px rgba(0,0,0,0.8);
    padding: 10px 10px 10px 70px;
  }
  .header h1{
    color: #03a9f4;
    padding: 10px;
  }
  





 

</style>

<body class="background">
  
    <input type="checkbox" id="check">
  <label for="check">
    <i class="fa fa-navicon" id="open"></i>
    <i class="fa fa-close" id="close"></i>
  </label>
  <div class="sidebar">
    <header class="nama_header">
      <h1>Menu</h1>
    </header>
    <ul>
      <li><a href="#"><i class="fa fa-home"></i>Home </a> </li>
      <li><a href="#"><i class="fa fa-edit"></i>Daftar Petugas</a> </li>
      <li><a href="#"><i class="fa fa-download"></i>Daftar User</a> </li>
      <li><a href="#"><i class="fa fa-power-off"></i>About</a> </li>
    </ul>
    
  </div>
  <div class="header">
    <h1>Pengaduan Corona<a class="logout" href="<?= BASEURL ?>/home/logout" onclick="return confirm('yakin ingin logout?')">Log out</a></h1>
  </div>
  <div class="circle">
      <div class="share">
        <i class="fa fa-share-alt" aria-hidden="true"></i>
      </div>
      <ul class="btn_share">
        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </div>

  </body> 
    
    

</html>
<!-- <script type="text/javascript">
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



</script> -->
