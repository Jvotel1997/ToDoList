<form action="<?= URL ?>task/editSave" method="post">
  <h2>Edit</h2>
  Task description: <input type="text" name="task_description" value="<?= $task['task_description'] ?>"><br>
  <input type="hidden" name="task_id" value="<?= $task['task_id']; ?>">
  <button type="submit">Submit</button>
</form>
