<html>
<head>
<meta charset="utf-8">
</head>

<body>

<?php
session_start();

$principal_username="principal";
$principal_password="100";

$teacher_username="teacher";
$teacher_password="101";

$student_username="student";
$student_password="102";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($principal_username==$id)&&($principal_password==$pwd)){
    $_SESSION["login"]="Yes";
    header("Location:homework2_principal.php");
}else if(($teacher_username==$id)&&($teacher_password==$pwd)){
    $_SESSION["login"]="Yes";
    header("Location:homework2_teacher.php");
}else if(($student_username==$id)&&($student_password==$pwd)){
    $_SESSION["login"]="Yes";
    header("Location:homework2_student.php");
}else{
    $_SESSION["login"]="No";
    header("Location:homework2_fail.php");
}

?>
</body>
</html>