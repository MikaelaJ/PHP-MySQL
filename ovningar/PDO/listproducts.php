<?php require 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Products</title>
</head>

<body>
    <h1>PDO</h1>
    <?php
    $query = 'SELECT product.maker, product.type, pc.model, pc.speed, pc.ram, pc.price FROM';
    $query .= ' pc INNER JOIN product ON pc.model = product.model';
    $query .= ' UNION';
    $query .= ' SELECT product.maker, product.type, laptop.model, laptop.speed, laptop.ram, laptop.price FROM';
    $query .= ' laptop INNER JOIN product ON laptop.model = product.model';

    // Check if GET orderby i set
    if (isset($_GET['orderby'])) {
        $query .= " ORDER BY {$_GET['orderby']}"; // Skaffa en vana att använda curly bracket när man stoppar in variabler i strängen. (När det är assoc arr)
    }

    $statement = $pdo->prepare($query); // Nu har vi kör query mot databasen
    $statement->execute();

    // Nu vill vi läsa ut data. Get all as Associative arrays.
    $data = $statement->fetchAll(PDO::FETCH_ASSOC); //Varje produkt i sig kommer att vara accociative array.

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
            // Loop through all products
            foreach ($data as $product) {
                ?>
                <tr>
                    <td><?= $product['maker'] ?></td>
                    <td><?= $product['type'] ?></td>
                    <td><?= $product['model'] ?></td>
                    <td><?= $product['speed'] ?></td>
                    <td><?= $product['ram'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><a href=""></a></td>
                </tr>
            <?php
        }
        ?>
        </thead>
    </table>


</body>

</html>