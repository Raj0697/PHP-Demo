<?php	
		
$ID=$_POST['ID'];
$NAME = $_POST['Name'];
$SEX= $_POST['SEX'];
$ADDRESS = $_POST['address'];
$MARITALSTATUS=$_POST['maritalstatus'];
$EDUCATIONAL QUALIFICATION= $_POST['educ'];
		
echo "<center><h1> The Documents are entered !!!</h1></center>";
echo "<br/>";
echo "<h3>1. ID : $ID</h3>";
echo "<h3>2. Name : $NAME</h3>";
echo "<h3>3. Gender : $SEX</h3>";
echo "<h3>4. Address : $ADDRESS</h3>";
echo "<h3>5. MARITAL STATUS : $MARITALSTATUS</h3>";
echo "<h3>6. EDUCATIONAL QUALIFICATION : $qualification</h3>";
		
                                                                                                                      
	if(!empty($ID) || !empty($NAME) || !empty($SEX) || !empty($ADDRESS) || !empty($MARITALSTATUS) || !empty($EDUCATIONAL QUALIFICATION))
		{ 
			$host = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbname = "raj";
			//create connection
			$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
			if (mysqli_connect_error())
			{ 
				die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
			} 
			else
			{
				$INSERT = "INSERT into webform (ID,NAME,SEX,ADDRESS,MARITAL STATUS,EDUC QUALIFICATION) values(?, ?, ?, ?, ?, ?, ?)";
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssssss", $ID, $NAME, $SEX, $ADDRESS, $MARITALSTATUS, $EDUCATIONAL QUALIFICATION);
				$stmt->execute();
				$stmt->close();
				echo "<br><br><h2><center> $NAME Uploaded Successfully </center></h2>";
			}
			$conn->close();
		}
	else
		{
			echo "<br><br><h2><center> $NAME Unsuccessfully </center></h2>";
		}

?>