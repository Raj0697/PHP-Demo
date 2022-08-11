<?php
$prod=$_POST['pro'];
$sex=$_POST['gen'];
$type=$_POST['mar'];

	echo"the details are entered";
	echo"<br>";
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="raj";
	
	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	{
		die('.connect_error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		$INSERT="insert into sample(product,sex,martype)values(?, ?, ?)";
		$stmt=$conn->prepare($INSERT);
		$stmt->bind_Param("sss",$prod,$sex,$type);
		$stmt->Execute();
		$stmt->close();
		echo"<br> success";
	}
	$conn->close();
