<?php require 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>

<body>
    <!-- Vad kommer vi behöva spara om vi lägger till en ny product? -->
    <?php
    /* model, speed, ram, hd, rd, price */
    if (count($_POST) == 8) {
        $query = 'INSERT INTO pc (model, speed, ram, hd, rd, price) VALUES (?, ?, ?, ?, ?, ?)';
        $statement = $pdo->prepare($query);
        $statement->execute([
            $_POST['model'],
            $_POST['speed'],
            $_POST['ram'],
            $_POST['hd'],
            $_POST['rd'],
            $_POST['price']
        ]);

        $query = 'INSERT INTO product (maker, model, type) VALUES (?, ?, ?)';
        $statement = $pdo->prepare($query);
        $statement->execute([
            $_POST['maker'],
            $_POST['model'],
            $_POST['type']
        ]);
        echo "Added {$_POST['model']}";
    }
    ?>


    <form method="POST"> <!-- När vi skickar formuläret skickar man det till sin egen sida -->
        <label>Model</label>
        <input type="text" name="model">
        <br>
        <label>Speed</label>
        <input type="text" name="speed">
        <br>
        <label>Ram</label>
        <input type="text" name="ram">
        <br>
        <label>Hd</label>
        <input type="text" name="hd">
        <br>
        <label>Rd</label>
        <input type="text" name="rd">
        <br>
        <label>Price</label>
        <input type="text" name="price">
        <input type="hidden" name="type" value="pc">
        <br>
        <select name="maker">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
        </select>
        <br>
        <input type="submit" valeu="Save">

    </form>

</body>

</html>