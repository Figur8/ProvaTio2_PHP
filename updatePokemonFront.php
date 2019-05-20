<!DOCTYPE html>
<?php
    session_start();
    $_SESSION["updatePokemon"] = $_GET["codigo"];
?>
<html>
<head>
    <title>Add a pokemon</title>
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
 
<fieldset>
    <legend>Add Member</legend>
 
    <form action="updatePokemon.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Name</th>
                <td><input type="text" name="pokemon_NameUpdate" placeholder="Pokemon Name" /></td>
            </tr>     
            <tr>
                <th>Type</th>
                <td><input type="text" name="typeUpdate" placeholder="Type" /></td>
            </tr>
            <tr>
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>