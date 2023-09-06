<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background-color: rgba(71, 146, 220, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .todo-container {
            background-color: rgba(34, 73, 112, 0.8);
            max-width: 400px;
            padding: 20px;
            border-radius: 5px;
        }

        /* Rest of your existing CSS styles here */

    </style>
</head>
<body>
<div id="particles-js"></div>
<div class="todo-container">
    <h1 class="title">Todo List</h1>
    <div class="input-container">
        <input
            type="text"
            placeholder="Add a task..."
            class="task-input"
            id="task-input"
        />
        <button onclick="addTask()" class="add-button">Add</button>
    </div>
    <ul class="task-list" id="task-list">
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", {
        particles: {
            number: {
                value: 50,
            },
            size: {
                value: 3,
            },
        },
        interactivity: {
            events: {
                onhover: {
                    enable: true,
                    mode: "repulse",
                },
            },
        },
    });

    function addTask() {
        const taskInput = document.getElementById("task-input");
        const taskList = document.getElementById("task-list");

        if (taskInput.value.trim() !== "") {
            const taskText = taskInput.value;
            taskInput.value = "";

            const listItem = document.createElement("li");
            listItem.className = "task-item";
            listItem.innerHTML = `
                    ${taskText}
                    <span class="delete-button" onclick="deleteTask(this)">Delete</span>
                `;

            taskList.appendChild(listItem);
        }
    }

    function deleteTask(button) {
        const taskList = document.getElementById("task-list");
        const listItem = button.parentElement;
        taskList.removeChild(listItem);
    }
</script>
</body>
</html>
