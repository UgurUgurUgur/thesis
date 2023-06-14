<?php
use App\Todo;
use Illuminate\Http\Request;

$taskTitle = $_POST['task_title'];
$priority = $_POST['priority'];
$description = $_POST['description'];

header('Location: index.html');
exit;

$taskTitle = $request->input('task_title');
$priority = $request->input('priority');
$description = $request->input('description');
$task = new Todo;
$task->task_title = $taskTitle;
$task->priority = $priority;
$task->description = $description;
$task->save();
?>
