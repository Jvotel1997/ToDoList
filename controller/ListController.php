<?php

require(ROOT . "model/ListModel.php");

function index()
{
	render("home/index", array(
		'list' => getAllLists()
	));
}

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

function edit($id)
{
	render("list/edit", array(
		'list' => getList($id)
	));
}

function editSave()
{
	if (!editList()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "home/index");
}

function delete($id)
{
	if (!deleteList($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "home/index");
}
