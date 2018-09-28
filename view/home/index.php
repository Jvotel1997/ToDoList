<main>
  <?php foreach ($lists as $list) { ?>
    <div id="list_<?= $list['list_id'] ?>" class="list">
      <div class="list-name"><?= $list['list_name']; ?></div>
      <div class="sort">
        <span>Naam</span>
        <span onclick="sort('list_<?= $list['list_id'] ?>')" class="sort-status">Status</a>
      </div>
      <div class="task-items">
        <?php foreach (getAllTasksFromList($list['list_id']) as $task) { ?>
          <div class="task">
            <p class="task-description">
              <span>
                <?= $task['task_description'] ?>
              </span>
              <span class="status" data-statusid="<?= $task['status_id'] ?>">
                <?= $task['status_name'] ?>
              </span>
              <span class="task-menu">
                <a href="<?= URL ?>task/delete/<?= $task['task_id'] ?>">Delete</a>
                <a href="<?= URL ?>task/edit/<?= $task['task_id'] ?>">Edit</a>
              </span>
            </p>
          </div>
        <?php } ?>
      </div>
      <div class="options">
        <a href="<?= URL ?>task/create/<?= $list['list_id'] ?>" id="add-task">Add a task</a>
        <div>
          <p id="filter">Filter on</p>
          <select onchange="filter('list_<?= $list['list_id'] ?>')" class="filterbox" name="filter">
            <option value="1">To do</option>
            <option value="2">In progress</option>
            <option value="3">Finished</option>
          </select>
          <!-- <input type="submit" value="Apply filter"> -->
        </div>
        <div>
          <a href="<?= URL ?>list/edit/<?= $list['list_id'] ?>">Edit list</a>
          <a href="<?= URL ?>list/delete/<?= $list['list_id'] ?>">Delete list</a>
        </div>
      </div>
    </div>
  <?php } ?>
  <a href="<?= URL ?>list/create" id="add-list">Add a list...</a>
  <p id="test"></p>
  <script src="<?= URL ?>js/custom.js"></script>
</main>
