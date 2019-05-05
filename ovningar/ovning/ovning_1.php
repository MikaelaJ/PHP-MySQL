<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Övningar</title>
</head>

<body>
    <!-- 1. Använd PHP för att skriva ut en paragraf med texten: "Programming!!!" -->
    <i>
        <?php
        echo "Programming!!!"
        ?>
    </i>


    <!-- 2. Använd PHP för att skriva ut en <div> med färgen ligthcoral som är 200x200px stor. -->
    <?php
    echo "<div style='background-color: lightcoral;
    height: 200px;
    width: 200px;'></div>";
    ?>
    <!-- 3. Använd PHP för att skriva ut en <h1>-tagg med ditt namn. Ditt namn ska vara i en variabel och inte hårdkodat in som exemplet ovan. Tänk på att det är skillnad på '' och "". Med '' måste du använda . för att lägga in en variabel i en sträng. -->
    <h1>
        <?php
        $name = "Mikaela";
        echo $name;
        ?>
    </h1>

    <!-- 4. Dela upp ditt namn i två variabler, $firstName och $lastName. Gör så att hela ditt namn skrivs ut i din <h1>-tagg. -->
    <h1>
        <?php
        $firstName = "Mikaela";
        $lastName = "Johansson";

        echo $firstName . " " . $lastName;
        ?>
    </h1>

    <!-- 5. Du har texten nedan. Med PHP/HTML, gör så att det blir en ny rad efter varje mening. Du får själv dela upp texten som du vill. Det finns flera sätt att göra detta på.

"I've seen things you people wouldn't believe. Attack ships on fire off the shoulder of Orion. I watched C-beams glitter in the dark near the Tannhauser gate. All those moments will be lost in time... like tears in rain... Time to die." -->

    <p>
        <?php
        $string = "I've seen things you people wouldn't believe. Attack ships on fire off the shoulder of Orion. I watched C-beams glitter in the dark near the Tannhauser gate. All those moments will be lost in time... like tears in rain... Time to die.";
        $string_arr = explode(".", $string);
        for ($i = 0; $i < count($string_arr); $i++) {
            echo $string_arr[$i] . "</br>";
        }
        ?>
    </p>

    <!-- Du har variabeln $age = 26, fast det är din egen ålder. Gör så att din ålder skrivs ut på sidan med php på sidan fast i hundår. Du ska inte ändra på variabeln. -->
    <h3>
        <?php
        $age = 33;
        echo "I'm " . $age * 7 . " dogyears";
        ?>
    </h3>

    <!-- Variabler och IF / ELSE -->
    <!-- 1. & 2. Skapa en variabel vid namn $has_header som innehåller värdet true eller false. Om värdet är true så ska en <h1>-tagg skrivas ut, annars ska inte en <h1>-tagg skrivas ut. -->
    <?php
    $has_header = true;
    if ($has_header) {
        echo "<h1>This is a header!</h1>";
    } else {
        echo "<p>This is a paragraph</p>";
    };
    ?>

    <!-- 3. Skapa en variabel $age. Om värdet är under 18 så ska dina sida skriva ut "Den där energidrycken är bara för vuxna unge man!. Annars ska din sida skriva ut "500kr tack" -->

    <?php
    $age = 17;
    if ($age < 18) {
        echo "Den där energidrycken är bara för vuxna unge man!";
    } else {
        echo "500kr tack";
    };
    ?>
    <br>
    <!-- 4. Ms. Syntax Error vill ha ett alarm som anger om vattnet kokar eller inte. Hon vill även att man visar när det når 50 grader så att hon är beredd! Om det inte är 50 eller 100 grader så skall det endast säga att det inte kokar.

Ange hur många grader vattnet är i en variabel.
Om vattnet är 100 grader skriv ut: "Vattnet kokar!"
Om vattnet är 50 grader skriv ut: "Det är halvägs nu!"
Annars skriv ut: "Vattnet kokar inte!" -->

    <?php
    $degrees = 100;
    if ($degrees == 100) {
        echo "Vattnet kokar!";
    } else if ($degrees == 50) {
        echo "Det är halvvägs nu!";
    } else {
        echo "Vattnet kokar inte!";
    }
    ?>
    <br>

    <!-- 5. Boolean gillar att bada, dock tar vattnet ibland slut hemma och dessutom kan värmen variera ganska mycket. Skriv i PHP ett program som kollar om det finns vatten och om det är tillräckligt varmt. Tips du kan ha en if-sats inuti en annan if-sats.

Läs in om det finns vatten (true / false)
Läs in hur många grader vattnet är.
Om det finns vatten och det är varmare än 30 grader skriv ut: ”Varsågod och bada!”
Om det INTE finns vatten eller det är kallare än 30 grader skriv ut: ”Det går inte att bada.”_ -->
    <?php
    $water = true;
    $grader = 31;
    if ($water) {
        if ($grader > 30) {
            echo "Varsågod att bada!";
        } else {
            echo "Det går inte att bada, det är för kallt!";
        }
    } else {
        echo "Det finns inget vatten!";
    }
    ?>

    <!-- 6. Vi bestämmer oss för att ta sovmorgon och echoar ut att vi tar sovmorgon om det är en helgdag $weekend eller om vi har semester $vacation. -->
    <?php
    $vacation = false;
    $weekend = false;

    if ($vacation) {
        echo "Du kan ta sovmorgon!";
    } else if ($weekend) {
        echo "Du kan ta sovmorgon!";
    } else {
        echo "Gotta work!";
    }
    ?>
    <br>
    <!-- Skriv ut "Gå upp, gå till jobbet, jobba, jobba, äta lunch" om variabeln $age är mellan 18 och 65. Om den är under 18 så skriv ut "EFTERFEST!". Om den är över 65 skriv ut "mmm, finska pinnar.". -->
    <?php
    $age = 6;
    if ($age > 18 && $age < 65) {
        echo "Gå upp, gå till jobbet, jobba, jobba, äta lunch";
    } else if ($age <= 18) {
        echo "<i>EFTERFEST!</i>";
    } else {
        echo "mmm, finska pinnar.";
    }
    ?>
    <br>
    <!-- Iffy äger ett stall med hästar av typerna A-ponny, B-ponny och C-ponny**. Iffy ska för första gången anordna en tävling. Tävlingsreglerna är följande: För att få tävla måste man fyllt 12 år. För att få tävla på A-ponny måste man väga under 30kg, B-ponny under 50kg och C-Ponny under 65kg.

Läs in användarens ålder med en variabel.
Om åldern är under 12 år så:
Skriv ut: ”Du är för ung för att tävla!”
Om åldern inte är under 12 år så
Läs in användarens vikt från variabel
Om vikten är under eller lika med 30kg skriv ut: ”A-ponny”
Om vikten är under eller lika med 50kg, och över 30kg skriv ut ”B-ponny”
Om vikten är under eller lika med 65kg och över 50kg skriv ut ”C-ponny”
Om vikten är över 65kg skriv ut ”Det finns inga ponnys för denna viktklass” -->

    <?php
    $age = 13;
    $weight = 55;

    if ($age >= 12) {
        if ($weight <= 30) {
            echo "A-ponny";
        } else if ($weight <= 50 && $weight > 30) {
            echo "B-ponny";
        } else if ($weight <= 65 && $weight > 50) {
            echo "C-ponny";
        } else {
            echo "För tjock!";
        }
    } else {
        echo "Du är för ung för att tävla!";
    }
    ?>
    <br>

    <!-- LOOPAR -->
    <!-- 1. Använd loopen från innan, fast istället för att skriva ut varje siffra: Lägg ihop sifforna i en ny variabel samt skriv ut den variabeln med echo efter loopen är slut. Du ska alltså lägga ihop alla värden till en variabel $sum. -->
    <?php
    $sum = 0;
    for ($i = 0; $i < 10; $i = $i + 1) {
        echo $sum = $sum + $i;
    }
    ?>
    <br>

    <!-- 2. Skapa en for-loop som skriver ut varannat tal. Loopen ska gå från 0 till 10. Använd loopen från ovan. -->
    <?php
    for ($i = 0; $i < 10; $i += 2) {
        echo $i;
    }
    ?>
    <br>

    <!-- 3. Skriv en for-loop som skriver ut värden åt andra hållet, så att siffrorna skrivs ut 10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0 -->

    <?php
    for ($i = 10; $i > 0; $i--) {
        echo $i . ' ';
    }
    ?>
    <br>

    <!-- 4. Skriv en for-loop med ett condition(if-sats) som gör så att endast siffror som är jämna tal skrivs ut till sidan. -->

    <?php
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            echo $i;
        }
    }
    ?>
    <br>

    <!-- 5. Skriv en while-loop som gör samma som övning 4. -->
    <?php
    $number = 0;
    while ($number < 10) {
        if ($number % 2 == 0) {
            echo $number;
        }
        $number++;
    }
    ?>
    <br>

    <!-- 6. Vad är skillnaden på de här två scripten? Vad kommer de båda skriva ut och varför?-->
    <?php
    $num = 0;
    while ($num < 0) {
        echo $num;
        $num++;
    }

    /* Denna DO-WHILE skriver ut minst en gång oavsett villkor */
    $num = 0;
    do {
        echo $num;
        $num++;
    } while ($num < 0);
    ?>
    <br>

    <!-- 7. Mina får förökar sig snabbt och jag behöver ett php-script som kan räkna ut hur många de kommer att vara inom ett år. Varje månad kommer fåren att multipliceras med 4. -->

    <?php
    $numberOfSheep = 4;
    $monthNumber = 1;
    $monthsToPrint = 12;

    for ($monthNumber; $monthNumber <= $monthsToPrint; $monthNumber++) {
        $numberOfSheep *= 4;
        echo 'Det kommer vara ' . $numberOfSheep . ' får efter ' . $monthNumber . '<br>';
    }
    ?>
    <br>

    <!-- 8. Jag vill ha ett program som mjauar!

Programmet fungerar som så att den frågar användaren efter hur många mjau den vill ha. Om användaren skriver "3", ska programmet svara med "mjau mjau mjau". Om användaren skriver "4" ska programmet svara med "mjau mjau mjau mjau". Om användaren skriver "0" ska programmet "avslutas", d.v.s. inte ta in mer input. Programmet ska fungera som följande:

Läs in ett tal från en variabel.
Om talet är inte är 0 a. Skriv lika många "mjau" som talet, i rad
Annars skriv ut "😾" eller något annat. -->

    <?php
    $mjau = 7;

    if ($mjau == 0) {
        echo "😾";
    } else {
        for ($i = 0; $i < $mjau; $i++) {
            $numberOfMjaus .= '<br>mjau';
        }
        echo $numberOfMjaus;
    }
    ?>
</body>
</html>