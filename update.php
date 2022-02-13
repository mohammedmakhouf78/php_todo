<?php
include "./functions.php";

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $todo = $_POST['todo'];
    updateTodo($conn,$todo,$id);
}

header('location: ./index.php');