<?php



function delete($id="", $table='users'){
    include("config.php");

    empty($id)? $id = $_GET['id'] : "";

	$query = "DELETE FROM $table WHERE id=$id" ;
    
	$result = mysqli_query($mysqli, $query);

    header("Location:index.php");

};

delete()




?>

