<?php
require_once "conection.php";
session_start();

$pokemonName = $_POST['pokemon_NameUpdate'];
$FkTypes = $_POST['typeUpdate'];

$id_For_Update = $_SESSION["updatePokemon"];

$sql = "UPDATE Pokemons SET pokemon_Name='$pokemonName' WHERE id_Pokemon=$id_For_Update";

if ($connect->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("location: /index.php");
} else {
    echo "Error updating record: " . $connect->error;
}

$connect->close();

?>