<form action="<?= URL ?>list/editSave" method="post">
  <h2>Edit</h2>
  List name: <input type="text" name="list_name" value="<?= $list['list_name'] ?>"><br>
  <input type="hidden" name="list_id" value="<?= $list['list_id']; ?>">
  <button type="submit">Submit</button>
</form>
