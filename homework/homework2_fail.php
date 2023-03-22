<?php ob_start(); ?>
<?php
session_start();

if($_SESSION["login"]=="No"){

}else{
    header("Location:homework2_error.php");
}
?>

<html>
<head>
<meta charset="utf-8">
</head>

<body>
Login failed!!<br>
this page will jump to the login page or <br>
<a href="homework2.php">click here </a>
<?php
header("refresh:15 ; url=homework2.php")
?>
</body>
</html>
<?php ob_flush(); ?>