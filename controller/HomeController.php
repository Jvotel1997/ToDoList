<?php

require(ROOT . "model/ListModel.php");
require(ROOT . "model/TaskModel.php");

function index() {
	render("home/index", array(
		'lists' => getAllLists()
	));
}
