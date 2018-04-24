var sortMemory = [];

function sort(list_id) {
  if (sortMemory[list_id] == null) {
    sortMemory[list_id] = true;
  }
  else {
    sortMemory[list_id] = !sortMemory[list_id];
  }
  //"#"+list_id = dynamische list id.
  var tasks = document.querySelectorAll("#" + list_id + " .task"); // =null
  var taskArray = Array.from(tasks);
  taskArray.sort(function(a, b) {
    var aStatus = getStatus(a);
    var bStatus = getStatus(b);

    if (sortMemory[list_id]) {
      return aStatus - bStatus;
    } else {
      return bStatus - aStatus;
    }
  });

  var list = document.getElementById(list_id);
  list.innerHTML = "";
  for (var y = 0; y < taskArray.length; y++) {
    list.appendChild(taskArray[y]);
  }
}

function getStatus(task) {
  var statusNode = task.querySelector(".status");
  return parseInt(statusNode.dataset.statusid);
}
