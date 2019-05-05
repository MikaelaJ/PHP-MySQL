<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms - lektion 3</title>
</head>

<body>
    <h1>Lektion 3 - Code along</h1>
    <form method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname"> <br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname"> <br>

        <label for="">Developer</label>
        <input type="radio" name="occupation" id="developer" value="Developer" />

        <label for="teacher">Teacher</label>
        <input type="radio" name="occupation" id="teacher" value="Teacher" />
        <br>

        <label for="busy">Busy?</label>
        <input type="checkbox" id="busy" name="busy" />
        <br>

        <input type="submit" value="Submit">
    </form>

    <pre>
    <?php
    var_dump($_POST);
    echo $_POST['firstname'] . "\n";
    echo $_POST['lastname'] . "\n";
    echo $_POST['occupation'] . "\n";
    echo $_POST['busy'] . "\n";

    if (isset($_POST['busy'])) {
echo 'Busy is set';
    } else {
        echo 'Busy is NOT set';
    }
    ?>
    </pre>

</body>

</html>