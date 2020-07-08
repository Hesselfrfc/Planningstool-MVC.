<?php


function readPlanning(){
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("SELECT planning.*, games.* from planning LEFT JOIN games on games.id = planning.gameId ORDER BY datum ASC");
		$stmt->execute();
		$result = $stmt->fetchAll();
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	return $result;	
}

function infoItem($id){
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("SELECT planning.*, games.* from planning LEFT JOIN games on games.id = planning.gameId WHERE planningId=:id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$result = $stmt->fetch();
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	return $result;	
}


function infoPlanning($id){
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("SELECT planning.*, games.* from planning LEFT JOIN games on games.id = planning.gameId WHERE planningId=:id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$result = $stmt->fetch();
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	return $result;	
}



function readGames(){
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("SELECT * FROM games");
		$stmt->execute();
		$result = $stmt->fetchAll();
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	return $result;
}

function createActivity($data){
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("INSERT INTO planning (gameId, tijd, datum, uitlegger, meedoen ) VALUES (:gameId, :tijd, :datum, :uitlegger, :meedoen)");
		$result = $stmt->execute($data);
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	return $result;
}

function deleteActivity($id){
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("DELETE FROM planning WHERE planningId=:id");
		$stmt->bindParam(':id', $id);
		$result = $stmt->execute();
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	return $result;
}

function updateActivity($data){
	try {
		$conn=openDatabaseConnection();
		$stmt = $conn->prepare("UPDATE planning SET gameId=:gameId, tijd=:tijd, datum=:datum, uitlegger=:uitlegger, meedoen=:meedoen WHERE planningId=:planningId");
		$result = $stmt->execute($data);
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	return $result;
}

?>