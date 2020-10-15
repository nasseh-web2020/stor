<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

</head>
<body onload="<a href='../index.html'></a>">

<?php
$con=mysqli_connect("localhost","root","","reg_website");
if(mysqli_connect_errno())
{
	echo 'Error to page'.mysqli_connect_errno();
}

///   variables the enter

// the page 1
$p_number=$_POST["p_number"];
$p_average=$_POST["p_average"];
$p_city=$_POST["p_city"];
$p_type=$_POST["p_type"];
$p_year=$_POST["p_year"];
//the page 2
$p_clg=$_POST["p_clg"];
$p_sc=$_POST["p_sc"];
//the page 3
$p_name=$_POST["p_name"];
$p_phone=$_POST["p_phone"];
$p_email=$_POST["p_email"];
$p_sex=$_POST["p_sex"];
$p_p_birth=$_POST["p_p_birth"];
$p_dpirth=$_POST["p_dpirth"];



$sqli="INSERT INTO reg (p_number,p_average,p_city,p_type,p_year,p_clg,p_sc,p_name,p_phone,p_email,p_sex,p_p_birth,p_dpirth)
VALUE ('$p_number','$p_average','$p_city','$p_type','$p_year','$p_clg','$p_sc','$p_name','$p_phone','$p_email','$p_sex','$p_p_birth','$p_dpirth')
";
if(!mysqli_query($con,$sqli))
{
	die('Erroe'.mysql_error($con));
}

echo '<h1 align="center">تمت الاضافة بنجاح  </h1>'."<br>";

header("location:../index.html");
echo '<h1 align="center">تمت الاضافة بنجاح  </h1>'."<br>";
mysqli_close($con);

?>
</body>
</html>
