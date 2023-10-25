<?php
require_once 'model/funcionesBD.php';

function getAlbumSongByName($nombre){
    $conn = openConnectionDB("notabase");
    $sql = "SELECT imagePath FROM songs WHERE name = '" . $nombre . "'";
    $imageResultList = $conn->query($sql);
    closeConnection($conn);
    return $imageResultList;
    
}



function getAudioSongByName($nombre) {
    $conn = openConnectionDB("notabase");
    
    $sql = "SELECT path FROM songs WHERE name = '" . $nombre . "'";
    
    $listaCancionesResultado = $conn->query($sql);
    
    closeConnection($conn);
    return $listaCancionesResultado;
}

function getSongByName($nombre)
{
    $conn = openConnectionDB("notabase");

    $sql = "SELECT * FROM songs WHERE name = '" . $nombre . "'";
                            
    $resultName = $conn->query($sql);
 
    closeConnection($conn);
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
    closeConnection($conn);
    return $result;
}