<?php require 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
</head>

<body>
    <h1>Update product</h1>
    <h3>Lektion 7</h3>
    <p>EXTRA UPPGIFT: Skapa en ny PHP-sida (updateproduct.php) där du har ett liknande formulär som det i förra uppgiften. Din sida ska läsa av $_GET för att se om det finns någon model och type i URL:en. Om det finns det ska du hämta produktinformationen från databasen och visa den informationen i formuläret. Du ska göra så att det inte går att ändra på maker, model eller type (du kan ta bort de fälten ur formuläret, eller göra en "disable"). När formuläret postas ska produkten uppdateras med UPDATE. Skapa en länk från varje produkt i listproducts.php-tabellen till updateproduct.php med model-numret och type i URL:en.</p>

    <?php

    $query = 'SELECT * FROM product WHERE product.model = 3344';
    $statement = $pdo->prepare($query);
    $statement->execute();

    // Nu vill vi läsa ut data.
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($data);
    ?>

    <table>
        <thead>
            <th><a href="?orderby=maker">Maker</a></th>
            <th><a href="?orderby=type">Type</a></th>
            <th><a href="?orderby=model">Model</a></th>
            <th><a href="?orderby=speed">Speed</a></th>
            <th><a href="?orderby=ram">Ram</a></th>
            <th><a href="?orderby=price">Price</a></th>

            <?php
            foreach ($data as $product) {
                ?>
                <tr>
                    <td><?= $product['maker'] ?></td>
                    <td><?= $product['type'] ?></td>
                    <td><?= $product['model'] ?></td>
                    <td><?= $product['speed'] ?></td>
                    <td><?= $product['ram'] ?></td>
                    <td><?= $product['price'] ?></td>
                </tr>
            <?php
        }
        ?>
        </thead>
    </table>

</body>

</html>