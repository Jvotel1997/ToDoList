<?php

function getAllLists() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM list";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createList() {
	$listname = isset($_POST['list_name']) ? $_POST['list_name'] : null;

	if (strlen($listname) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO list(list_name) VALUES (:name)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $listname));

	$db = null;

	return true;
}

function deleteList($id = null)
{
	if (!$id) {
		return false;
	}

	$db = openDatabaseConnection();
	$sql = "DELETE FROM list WHERE list_id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));
	$db = null;

	return true;
}
