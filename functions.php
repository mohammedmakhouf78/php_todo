<?php

$conn = mysqli_connect("localhost",'mohammed','','ddd',3309);

function insertTodo($conn,$todo)
{
    $query = "INSERT INTO todos(`todo`) VALUES ('$todo')";
    mysqli_query($conn,$query);
}

function selectAllFromTodo($conn)
{
    $query = "SELECT * FROM todos";
    $result = mysqli_query($conn,$query);
    //fetchs all data in an associative array
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}

function selectById($conn,$id)
{
    $query = "SELECT * FROM todos WHERE id = $id";
    $result = mysqli_query($conn,$query);
    return mysqli_fetch_assoc($result);
}

function deleteTodo($conn,$id)
{
    $query = "DELETE FROM todos WHERE id = $id";
    mysqli_query($conn,$query);
}

function updateTodo($conn,$todo,$id)
{
    $query = "UPDATE todos SET todo='$todo' WHERE id = $id";
    mysqli_query($conn,$query);
}