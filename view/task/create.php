<form action="<?= URL ?>task/createSave" method="post">
  <h2>Create</h2>
  Task description: <input type="text" name="task_description"><br>
  <input type="hidden" name="list_id" value="<?= $listId ?>">
  <button type="submit">Submit</button>
</form>
