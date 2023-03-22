<?php
session_start();

session_destroy();
header("Location:homework2.php");
?>