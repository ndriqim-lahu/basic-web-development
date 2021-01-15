<?php
    session_start();
    require_once "util.php";

    // if logged in then redirect to login.php
    if (!isUserLoggedIn()) {
        header("Location: /cacttus-s3-basic-web/task-management/login.php");
        die();
    }
?>
<html>
<head>
    <title>Task Management Tool | Task List</title>
</head>
<style>
#task_content {
  width: 50%;
  background-color: lightgrey;
  border: 1px solid black;
  margin: 20px;
  padding: 20px;
  text-align: justify;
}

#task_status {
    float: right;
    margin: 10px;
    padding: 5px;
}

#task_delete {
    background-color: red;
    color: white;
    float: right;
    margin: 10px;
    padding: 5px;
}
</style>
<body>
    <center>
        <br><br>
        <p><b>Task Management Tool - TASK LIST</b></p>
        <br><br>
        <button id="task_add" type="button"><a href="/cacttus-s3-basic-web/task-management/taskadd.php">Add Task</a></button>
        |
        <button id="sign_out" type="button"><a href="/cacttus-s3-basic-web/task-management/signout.php">Sign out</a></button>
        <br><br>
        <div id="task_content">
            <button id="task_delete" type="button">DELETE</button>
            <select id="task_status">
                <option>ToDo</option>
                <option>InProgress</option>
                <option>Done</option>
            </select>
            <div id="task_title">
                1. The title of the task
            </div>
            <div id="task_description">
                The description the task, The description the task, The description the task, The description the task, <br> The description the task...
            </div>
        </div>
    </center>
</body>
</html>