<?php


function show($table='users',$col='id'){
	include("config.php");
	$query = "SELECT * FROM $table ORDER BY $col DESC" ;
	$result = mysqli_query($mysqli, $query);

	for($i=0 ; $i < ($result->num_rows) ; $i++ ){
		$res =  mysqli_fetch_array($result) ;
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
};

?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' >

	<tr >
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
	show()
	?>
	</table>
</body>
</html>
