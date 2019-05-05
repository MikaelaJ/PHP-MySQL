<?php
require 'partials/session.php';
require 'partials/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <title>Index</title>
</head>

<body>
    <?php
    /* finns det nånting i q-string som är en action? */
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'register') {
            /* Vi vill stoppa in den här användaren i databasen */
            $statement = $pdo->prepare(
                "INSERT INTO users (username, password)
                VALUES (:username, :password)"
            );
            $statement->execute([
                ":username" => $_POST['username'],
                ":password" => password_hash($_POST['password'], PASSWORD_BCRYPT)
            ]);

            echo "You tried to register as {$_POST['username']}";
        }

        if ($_GET['action'] == 'login') {
            $statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $statement->execute([
                ":username" => $_POST['username']
            ]);
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if (password_verify($_POST['password'], $user['password'])) {
                $_SESSION["loggedIn"] = true;
                $_SESSION["username"] = $user["username"];
                $_SESSION["userID"] = $user["userID"];
            }
        }
    }
    ?>

    <?php
    if (isset($_SESSION["loggedIn"])) {
        require 'views/greeting.php';
        /* unset($_SESSION["loggedIn"]); */
    } else {
        require 'views/login.php';
        require 'views/register.php';
    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>

</html>