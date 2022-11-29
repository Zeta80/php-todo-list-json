<?php

$string = file_get_contents("todo.json");
$todos = json_decode($string, true);

if (isset($_POST["newTodo"])) {
    $new_todo = ['text' => $_POST["newTodo"], 'done' => true];
    $todos[] = $new_todo;
    file_put_contents("todo.json", json_encode($todos));
}


header("Content-Type: application/json");
echo json_encode($todos);
