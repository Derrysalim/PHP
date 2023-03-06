<html>
<head>
<title>資訊管理系烤</title>
</head>


</html>
<meta charset=utf8>

<?php

$id=$_POST["id"];
$email=$_POST["email"];
$department=$_POST["department"];
$fee=$_POST["fee"];

echo "Registration successfull here is your data!!! <br/>";
echo "<br/>";

echo "Your name : ".$id."<br/>";
echo "Your email : ".$email."<br/>";
echo "Your department : ".$department."<br/>";

echo "<br/>";
echo "Based on your data <br/>";

if($fee=="Yes"){ 
        echo "Please pay 200NTD to classleader<br/>";
}else{
        echo "Please pay 250NTD to classleader<br/>";
}

echo "<br/>";
echo "!!!Please enjoy the party!!! <br/>";
echo "I hope you have a very beautiful college life";

?>