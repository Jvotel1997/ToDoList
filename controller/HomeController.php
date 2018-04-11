<?php

require(ROOT . "model/ListModel.php");

function index() {
	render("home/index", array(
		'lists' => getAllLists()
	));
}
