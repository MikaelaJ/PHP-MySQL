<?php

/* echo "Hej {$_POST['username']}, du är född den {$_POST['birthdate']}. Din favoritegenskap är {$_POST['favvocss']}. Nice."; */

/* if ($_POST['password'] == "losen") {
    echo 'Hej ' . $_POST["username"] . 'du är född ' . $_POST["birthdate"] . 'Din favoritegenskap är' . $_POST['favvocss'] . '. Nice.';
} else {
    echo "<img src='https://media.giphy.com/media/3ohzdQ1IynzclJldUQ/giphy.gif' alt='magic word' />";
} */

$birthday = strtotime($_POST['birthdate']);
$now = strtotime(now);

$age = ($now - $birthday) / 60 / 60 / 24 / 356; // Eftersom svaret blir i sekunder så måste man dela med sekunder, minuter, timmar och dagar

if ($_POST['password'] == 'losen' && $age > 25) {
    echo 'Hej ' . $_POST["username"] . ' du är född ' . $_POST["birthdate"] . ' Din favoritegenskap är ' . $_POST['favvocss'] . '. Nice.';
} else {
    echo "<img src='https://media.giphy.com/media/3ohzdQ1IynzclJldUQ/giphy.gif' alt='magic word' />";
}

?>