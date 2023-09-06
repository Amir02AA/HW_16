import React, { useState } from "react";
import Particles from "react-particles-js";

const appStyles = {
    minHeight: "100vh",
    backgroundImage:
        "linear-gradient(to right, #3182CE, #9333EA)",
    position: "relative",
};

const containerStyles = {
    maxWidth: "600px",
    margin: "0 auto",
    padding: "20px",
};

const titleStyles = {
    fontSize: "2rem",
    fontWeight: "bold",
    color: "#fff",
    marginBottom: "20px",
};

const inputStyles = {
    padding: "10px",
    borderRadius: "5px",
    backgroundColor: "#fff",
    outline: "none",
    border: "1px solid #ccc",
    marginRight: "10px",
    width: "70%",
};

const addButtonStyles = {
    padding: "10px 20px",
    borderRadius: "5px",
    backgroundColor: "#3182CE",
    color: "#fff",
    border: "none",
    cursor: "pointer",
};

const listItemStyles = {
    backgroundColor: "rgba(255, 255, 255, 0.8)",
    padding: "10px",
    borderRadius: "5px",
    marginBottom: "10px",
    display: "flex",
    justifyContent: "space-between",
    alignItems: "center",
};

const deleteButtonStyles = {
    color: "#E53E3E",
    cursor: "pointer",
};

function TodoApp() {
    const [tasks, setTasks] = useState([]);
    const [taskInput, setTaskInput] = useState("");

    const addTask = () => {
        if (taskInput) {
            setTasks([...tasks, taskInput]);
            setTaskInput("");
        }
    };

    const deleteTask = (index) => {
        const updatedTasks = [...tasks];
        updatedTasks.splice(index, 1);
        setTasks(updatedTasks);
    };

    return (
        <div style={appStyles}>
            <Particles
                params={{
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
                }}
                style={{
                    position: "absolute",
                    top: 0,
                    left: 0,
                    right: 0,
                    bottom: 0,
                }}
            />
            <div style={containerStyles}>
                <h1 style={titleStyles}>Todo List</h1>
                <div>
                    <input
                        type="text"
                        placeholder="Add a task..."
                        value={taskInput}
                        onChange={(e) => setTaskInput(e.target.value)}
                        style={inputStyles}
                    />
                    <button onClick={addTask} style={addButtonStyles}>
                        Add
                    </button>
                </div>
                <ul>
                    {tasks.map((task, index) => (
                        <li key={index} style={listItemStyles}>
                            {task}
                            <button onClick={() => deleteTask(index)} style={deleteButtonStyles}>
                                Delete
                            </button>
                        </li>
                    ))}
                </ul>
            </div>
        </div>
    );
}

export default TodoApp;