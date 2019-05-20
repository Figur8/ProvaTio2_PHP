<?php
require_once 'conection.php';
session_start();
$id_For_Delete = $_GET["codigo"];//$_SESSION['deletePokemon']
echo $id_do_vagabundo;
$sqlDelete = "DELETE FROM Pokemons WHERE id_Pokemon=$id_For_Delete";

if ($connect->query($sqlDelete) === TRUE) {
    echo "Record deleted successfully";
    header('location: /index.php');
} else {
    echo "Error deleting record: " . $connect->error;
}

$connect->close();
?>
