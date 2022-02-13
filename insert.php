<?php
include "./functions.php";

if(isset($_POST['todo']))
{
    $todo = $_POST['todo'];
    insertTodo($conn,$todo);
}


header('location: ./index.php');