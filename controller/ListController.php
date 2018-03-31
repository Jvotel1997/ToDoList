<?php

require(ROOT . "model/ListModel.php");

function create()
{
	render("list/create");
}

function createSave()
{
	if (!createList()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "home/index");
}
