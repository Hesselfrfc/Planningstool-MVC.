<?php

require(ROOT . "model/PlanningModel.php");

function index(){
	$planningAll = readPlanning();

	render('planning/index', $planningAll);
}

function item($id){
	$planningInfo = infoItem($id);

	render('planning/item', $planningInfo);
}



function create(){
	$showGames = readGames();

	render('planning/create', $showGames);
}

function createPlanning(){
	$result = createActivity($_POST);
	$url = URL . "public/planning/index";
	header("refresh:0; $url");
}

function delete($id){
	$planningInfo = infoItem($id);

	render('planning/delete', $planningInfo);
}

function deletePlanning($id){
	$result = deleteActivity($id);
	$url = URL . "public/planning/index";
	header("refresh:0; $url");
}



function update($id){
	$planningInfo = infoPlanning($id);
	$showGames = readGames();
	$data["planning"]=$planningInfo;
	$data["games"]=$showGames;
	render('planning/update',$data);


}

function updatePlanning(){
	$result = updateActivity($_POST);
	$url = URL . "public/planning/index";
	header("refresh:0; $url");
}








?>
