<?php

require(ROOT . "model/StudentModel.php");

function index(){
	$planningAll = readPlanning();

	render('planning/index', $planningAll);
}

?>
