<main class="container-fluid">
  <?php foreach ($lists as $list) { ?>
    <div class="list">
      <div class="list-name"><?= $list['list_name']; ?>
        <a href="<?= URL ?>list/delete/<?= $list['list_id'] ?>">Delete list</a>
        <a href="<?= URL ?>list/edit/<?= $list['list_id'] ?>">Edit list</a>
      </div>
    </div>
  <?php } ?>
  <a href="<?= URL ?>list/create">Add a list...</a>
</main>
