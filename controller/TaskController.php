<?php

require(ROOT . "model/TaskModel.php");

function index()
{
	render("home/index", array(
		'task' => getAllTasks()
	));
}

function create($list_id)
{
	render("task/create", array(
		'listId' => $list_id));
}

function createSave()
{
	if (!createTask()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "home/index");
}

function edit($id)
{
	render("task/edit", array(
		'task' => getTask($id)
	));
}

function editSave()
{
	if (!editTask()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "home/index");
}

function delete($id)
{
	if (!deleteTask($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "home/index");
}
