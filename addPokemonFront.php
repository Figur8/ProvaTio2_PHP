<!DOCTYPE html>
<html>
<head>
    <title>Add a pokemon</title>
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
 
<fieldset>
    <legend>Add Member</legend>
 
    <form action="createPokemon.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="pokemon_Name" placeholder="Pokemon Name" /></td>
            </tr>     
            <tr>
                <th>Last Name</th>
                <!-- <td><input type="text" name="type" placeholder="Type" /></td> -->
                <td>
                <select name="type">
                <?php 
                //TODO - perguntar melhor ao professor como funciona o extract
                /*
                extract() verifica cada chave e vê se ela tem um válido nome de variável. 
                Também verifica por colisões com já existente variáveis na tabela de símbolo.
                chute:  
                */
                extract($_POST);

                require_once 'conection.php';
                 $sqli = "SELECT id_Type, Name_Type FROM Types";
                 $result = $connect->query($sqli);

                 if ($result->num_rows > 0) {
              $contador = 0;
              /*mysqli_result::fetch_assoc -- mysqli_fetch_assoc — Obtem uma linha do conjunto de 
              resultados como uma matriz associativa
              */
               while($row = $result->fetch_assoc()) {
               ?>
                    <option value="<?php  echo $row['id_Type'];
                    ?>" >
                        <?php echo $row['Name_Type']?>
                    </option>
               <?php
                }
                    } else {
                    echo "0 results";
                 }
        
                 $connect->close();
                ?>
                </td>
                </select>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>