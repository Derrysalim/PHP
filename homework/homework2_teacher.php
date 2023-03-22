<?php 
session_start(); 

if($_SESSION["login"]=="Yes"){

}else{
    header("Location:homework2_error.php");
}

?>

<html>
<head>
<meta charset="utf-8">
</head>

<body>

login successfull, hello teacher<br>
<a href="homework2_student.php">click here to enter student page </a><br>
<a href="homework2_logout.php">logout </a>
</body>
</html>