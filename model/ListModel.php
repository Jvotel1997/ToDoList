<?php

function createList() {
	$listname = isset($_POST['list_name']) ? $_POST['list_name'] : null;

	if (strlen($listname) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO todo(list_name) VALUES (:name)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $listname));

	$db = null;

	return true;
}
