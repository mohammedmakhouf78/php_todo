<?php
include "./functions.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    deleteTodo($conn,$id);
}

header('location: ./index.php');