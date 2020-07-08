<?php


function readPlanning(){
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("SELECT planning.*, games.* from planning LEFT JOIN games on games.id = planning.gameId ORDER BY tijd ASC");
		$stmt->execute();
		$result = $stmt->fetchAll();
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	return $result;
	
}

?>