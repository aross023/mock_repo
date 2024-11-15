<?php
include 'config.php';


if(!isset($_GET["Id"]) ){
    $id = $_GET["id"];

    $sql = "DELETE FROM presidents WHERE Id = $id";
    $conn->query($sql);
    
}

header("location: /presidents/index.php");
        exit;

?>