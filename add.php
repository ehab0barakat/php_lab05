<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php


function add($name='' , $age='' , $email=''){
	if(isset($_POST['Submit'])) {
		$name =  $_POST['name'];
		$age = $_POST['age'];
		$email =  $_POST['email'];
		DataCheckEmpty($name, $age, $email);
	}	
	else{
		DataCheckEmpty($name, $age, $email);
	}

}

function DataCheckEmpty($name, $age, $email){
	if(empty($name) || empty($age) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		echo "<font color='red'>" ;
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}

	else{
		sendData($name, $age, $email) ;
	}
}

function sendData($name, $age, $email){
	include("config.php");
	$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");

	echo "<font color='green'>Data added successfully.";
	echo "<br/><a href='index.php'>View Result</a>";
}



add();

?>
</body>
</html>
