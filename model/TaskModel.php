<?php

function getTask($id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM task WHERE task_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}

function getAllTasksFromList($list_id) {
	$db = openDatabaseConnection();

	$sql = "SELECT task_id, task_description, task.status_id, status_name FROM task
	INNER JOIN status ON task.status_id = status.status_id
	WHERE list_id = :listId ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':listId' => $list_id
	));

	$db = null;

	return $query->fetchAll();
}

function createTask() {
	$description = isset($_POST['task_description']) ? $_POST['task_description'] : null;
	$listId = isset($_POST['list_id']) ? $_POST['list_id'] : null;

	if (strlen($description) == 0 | strlen($listId) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO task(task_description, list_id) VALUES (:name, :listId)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $description,
		':listId' => $listId
	));

	$db = null;

	return true;
}

function editTask()
{
	$description = isset($_POST['task_description']) ? $_POST['task_description'] : null;
	$id = isset($_POST['task_id']) ? $_POST['task_id'] : null;

	if (strlen($description) == 0 || strlen($id) == 0) {
		return false;
	}

	$db = openDatabaseConnection();
	$sql = "UPDATE task SET task_description = :description WHERE task_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':description' => $description,
		':id' => $id));
	$db = null;

	return true;
}

function deleteTask($id = null)
{
	if (!$id) {
		return false;
	}

	$db = openDatabaseConnection();
	$sql = "DELETE FROM task WHERE task_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;

	return true;
}
