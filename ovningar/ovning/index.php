<html>

<body>

    <?php
    /* Man kan byta variabler precis som i JS*/
    /* Det finns null-värden i PHP men inte undefined*/
    $name = "Mikaela";
    ?>
    <h1><?php echo "Hello World!"; ?></h1>
    <p>My name is <?php echo $name; ?></p>

    <?php
    $has_header = true;
    if ($has_header) {
        echo "<h1> It's a heading! </h1>";
    } else {
        echo "<p> It's a paragraph! </p>";
    }
    ?>

    <!-- $i++, $i += 1 el , $i = $i + 1 -->
    <!-- FOR LOOP -->
    <?php
    for ($i = 0; $i < 10; $i = $i + 1) {
        echo $i;
    }
    ?>

    <!-- WHILE LOOP -->
    <?php
    $num = 0;
    while ($num < 4) {
        echo $num;
        $num++;
    }
    ?>

    <!-- NY SYNTAX -->
    <!-- Double quotes för strängar "" -->
    <!-- Enkel quotes funkar inte i echo '' endast när man använder . -->
    <?php
    $message = "Hello World";
    for ($i = 0; $i < 10; $i = $i + 1) {
        echo $message . " " . $i . "<br />";
    }
    ?>




</body>

</html>