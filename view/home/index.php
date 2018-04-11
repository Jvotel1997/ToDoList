<main class="container-fluid">
  <?php foreach ($lists as $list) { ?>
    <div class="list">
      <div class="list-name"><?= $list['list_name']; ?></div>
    </div>
  <?php } ?>
  <a href="<?= URL ?>list/create">Add a list...</a>
</main>
