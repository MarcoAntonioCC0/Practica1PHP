<?php
require_once 'model/funcionesBD.php';

function getSongName()
{
    $conn = openConnectionDB("notabase");

    $sql = "select name from songs";
    $resultName = $conn->query($sql);
    return $resultName;
}

function getAllSongs()
{
    $conn = openConnectionDB("notabase");

    $sql = "select * from songs";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {

        // echo $row['name']."<br>";
    }

    return $result;

    closeConnection($conn);
}