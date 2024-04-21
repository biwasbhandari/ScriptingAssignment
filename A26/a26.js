document.addEventListener("DOMContentLoaded", function () {
  const taskForm = document.getElementById("taskForm");
  const taskInput = document.getElementById("taskInput");
  const taskList = document.getElementById("taskList");

  // Function to fetch tasks from server
  function fetchTasks() {
    fetch("tasks.php")
      .then((response) => response.json())
      .then((data) => {
        taskList.innerHTML = "";
        data.forEach((task) => {
          const li = document.createElement("li");
          li.textContent = task.task_name;
          if (task.task_status === "completed") {
            li.classList.add("completed");
          }
          li.addEventListener("click", () =>
            toggleTaskStatus(task.task_id, task.task_status)
          );
          taskList.appendChild(li);
        });
      });
  }

  // Function to add new task
  function addTask(taskName) {
    fetch("tasks.php", {
      method: "POST",
      body: JSON.stringify({ task_name: taskName }),
      headers: {
        "Content-Type": "application/json",
      },
    }).then(() => fetchTasks());
  }

  // Function to toggle task status (completed or not)
  function toggleTaskStatus(taskId, currentStatus) {
    const newStatus = currentStatus === "completed" ? "pending" : "completed";
    fetch(`tasks.php?id=${taskId}&status=${newStatus}`, {
      method: "PUT",
    }).then(() => fetchTasks());
  }

  // Event listener for form submission
  taskForm.addEventListener("submit", function (event) {
    event.preventDefault();
    const taskName = taskInput.value.trim();
    if (taskName !== "") {
      addTask(taskName);
      taskInput.value = "";
    }
  });

  // Initial fetch of tasks when the page loads
  fetchTasks();
});
