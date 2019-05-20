<?php 

require_once 'conection.php';
if($_POST) {
    $pokemonName = $_POST['pokemon_Name'];
    $FKTypes = $_POST['type'];
    echo $FKTypes;
    $type = (String)$FKTypes[1];



    $sql = "INSERT INTO Pokemons (pokemon_Name, FK_Types) VALUES ('$pokemonName', $FKTypes);";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='createPokemon.php'><button type='button'>Back</button></a>";
        echo "<a href='index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>