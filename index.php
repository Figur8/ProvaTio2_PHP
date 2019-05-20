<?php

    include "conection.php";
    session_start();
?> 
 
<html>
<head>    
    <title>Pokedex!</title>
</head>
 
<body>
    <a href="addPokemonFront.php">Catch!</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>ID</td>
            <td>Pokemon Name</td>
            <td>TYPE</td>
            <td>options</td>
        </tr>
        <?php 
        require_once 'conection.php';
        $sqlPokemons = "SELECT id_Pokemon, pokemon_Name, Name_Type FROM Pokemons JOIN  Types ON FK_Types = id_Type";
        $result = $connect->query($sqlPokemons);

         if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            ?>
            
            <tr>
        <td><?php echo $row['id_Pokemon']; ?></td>
        <td><?php echo $row['pokemon_Name']; ?></td>
        <td><?php echo $row['Name_Type']; ?></td>
        <td><a href="updatePokemonFront.php?codigo=<?php echo $row['id_Pokemon']; 
            ?>">Editar</a>
        <a href="deletePokemon.php?codigo=<?php echo $row['id_Pokemon'];
            //$_SESSION['deletePokemon'] = $row['id_Pokemon'];
            ?>">Excluir</a>
        
        </tr>
        
      </td>
    </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
        
        $connect->close();
        ?>

        
        
    </table>
    <script src="js/main.js" language=javascript></script>
</body>
</html>