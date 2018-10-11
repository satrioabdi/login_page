<!DOCTYPE HTML>
<html>
<head>
<title>Bootstrap Login Suckittrees.Com</title>

<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>

<link href="style/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" language="javascript" src="style/style.js"></script>

</head>
<body>

<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card">Suckittrees.Com</p>
            <form class="form-signin" action="" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="login">Sign in</button>
            </form>
            
        </div>
</div>

</body>
</html>
<?php
include "db_con.php";
IF(ISSET($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $cek = mysql_num_rows(mysql_query("SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
    $data = mysql_fetch_array(mysql_query("SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
    IF($cek > 0)
    {
        
        session_start();
        $_SESSION['email'] = $data['email'];
        $_SESSION['name'] = $data['full_name'];
        echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='index.php';</script>";
    }else{
        echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='login.php';</script>";
    }
}
?>
<?php 
session_start();
IF(ISSET($_SESSION['name'])){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>Bootstrap Login</title>
<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>

</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Home </a>
                <a class="navbar-brand" href="#">Navbar 2</a>
                <a class="navbar-brand" href="#">Navbar 3</a>
                <a class="navbar-brand" href="#">Navbar 4</a>
                <a class="navbar-brand pull-right" href="logout.php?destroy"> <span class="glyphicon glyphicon-off"></span> Logout </a>
                <a class="navbar-brand pull-right"><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['name'];?> </a>
            </div>
    </div>

</div>

<div class="container">

<h2>Hallo </h2>
<br>
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dapibus, tortor sit amet rhoncus lobortis, 
leo libero suscipit justo, ac tincidunt ligula eros sit amet sem. <br>
Sed lobortis nisl sed diam porttitor, quis lacinia felis lacinia. In urna nulla, consectetur nec nisi vitae, 
laoreet pellentesque augue. Donec feugiat, velit eu imperdiet semper, 
ante sem suscipit nulla, congue suscipit ipsum tellus commodo ipsum. Sed pharetra orci a volutpat faucibus.
</p>
<br>
</div>
</body>
</html>

<?php 
}else{
    echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";    
}
?>
<?php 
IF(ISSET($_GET['destroy'])){
    session_start();
    session_destroy();
    header('Location:login.php');
}
?>
Diskusi
Search Website

    Aplikasi SPPD Terbaru
    Software Aplikasi Perpustakaan Berbasis Web
    Ebook Membuat Website Dinamis PHP MYSQLi
    Jasa Pembuatan Website Pemda 

....Klik Untuk Aplikasi Lain....
Random Posts

    Sistem Informasi Pengolahan Data Pegawai PLN Berbasis Web
    Aplikasi Sistem Informasi Catering berbasis Web
    Aplikasi Website Kost Online PHP Mysqli
    Sistem Informasi Penjualan Air di PT ABC

