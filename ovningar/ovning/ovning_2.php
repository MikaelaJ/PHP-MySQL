<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Övningar</title>
</head>

<body>

    <!-- 1. Multiplicera $age med $z_index
Dividera $z_index med $is_a_chair;
Dividera $z_index med $is_human;
Multiplicera $is_human med $z_index;
Addera $lastName med $age;
Addera $firstName med $z_index;
Multiplicera $lastName med $is_human; -->

    <?php

    $firstName = "5Casper"; //new name law since this summer, probably valid name
    $lastName = "Gormy";
    $age = "42";
    $z_index = 999; // I'm in front of you
    $is_human = true; // 🤖?
    $is_a_chair = false; //don't label me!

    echo $z_index * $is_a_chair . '<br>'; /* 0 */
    echo $z_index / $is_human . '<br>'; /* 999 */
    echo $is_human / $is_human . '<br>'; /* 1 */
    echo $lastName + $age . '<br>'; /* 42 */
    echo $firstName + $z_index . '<br>'; /* 1004 */
    echo $lastName * $is_human . '<br>'; /* 1 */

    ?>

    <!-- 2. Vilka av nedanstående alternativ sparar en sträng på rätt sätt och varför? Varför funkar inte de alternativ som inte fungerar?: -->

    <?php
    $_message = 'These are not the potatotes youre looking for';
    $message = "These are not the potatoes yo ure looking  for";
    $message = "These are not the pot atoes you're looking for";
    $jävla_skit = "These are not the pota toes you're  looking for";
    $Message1 = 'These are not the potatoes you\'re looking for';

    echo $Message1;
    ?>

    <!-- 3. Skriv ett PHP-program där du har ett valfritt tal. Du ska med echo skriva ut vad resten blir från talet när du delar talet med 2. Resten av divisionen fås när talet beräknas med modulo 2 (%). Lagra resultatet i en ny variabel $result och skriv ut denna variabel enligt exemplet nedan: exempel på hur det ska skrivas ut Värde: 10 Resten av talet % 2 är: 0 Värde: 5 Resten av talet % 2 är: 1 -->

    <?php
    $number = 10;
    $modulus = $number % 2;
    echo "Värde: $number och resten av talet %2 är: $modulus <br>";
    ?>

    <!-- ARRAYER -->
    <!-- 1. Vi ska börja med att skriva ut olika värden i en array. Om vi har en array som denna: -->
    <?php
    $your_array = array(23, 45, 54, 12, 77);

    echo $your_array[0] . ' ' . $your_array[4] . '<br>';

    ?>

    <!-- 2. Om vi redan har en array som den ovan kan vi även direkt ändra på ett visst värde på samma sätt som när vi tilldelar en variabel ett värde med =.

Ändra sista värdet i $your_array genom att tilldela det nya värdet 1.
echoa arrayen efter att du har lagrat det nya värdet för att se att värdet verkligen har ändrats. -->
    <?php
    $your_array = array(23, 45, 54, 12, 77);
    $your_array[4] = 1;
    echo $your_array[4] . '<br>';
    ?>

    <!-- 3. För att komma åt alla värden i en array vill vi ju inte skriva in varenda index, speciellt inte om vi inte vet hur lång arrayen är, alltså hur många värden som finns inuti den. Vi kan inte bara skriva ut hela innehållet i arrayen med echo $my_array heller, det kommer bara att skriva ut hela arrayen och inte alla värden för sig. Tur att loopar finns.

Du har denna array:

$best_array = array(1, 2, 3, 4, 5);
Nu ska du loopa igenom arrayen och skriva ut varje värde i arrayen. Tänk på att längden av en array kan man ta ut med count($best_array) samt att varje värde i en array har ett index som man kommer åt värdet ifrån. Indexet är då detsamma som det nuvarande värdet på räknaren i loopen.

count @ php.net -->

    <?php
    $best_array = array(1, 2, 3, 4, 5);
    for ($i = 0; $i < count($best_array); $i++) {
        echo $best_array[$i] . ', ';
    }
    ?>

    <!-- 4. Använd samma array som tidigare. Nu ska du dock loopa igenom arrayen och multiplicera varje värde i arrayen med summan av det föregående värdet. D.v.s, 1 * 2 * 3.. etc.
Spara värdet i en $sum och skriv sedan ut denna variabel efter att loopen har körts klart -->

    <?php
    $best_array = array(1, 2, 3, 4, 5);
    $sum = $best_array[0];
    for ($i = 0; $i < count($best_array); $i++) {
        echo $sum *= $best_array[$i];
    }
    ?>

    <!-- 5. Du ska utgå från följande array:

$ok_array = array("fine", "FINE", "good", "what is this stuff?", "sweet", "i don't even live here");
Du ska loopa igenom arrayen och skriv ut dess värden. Dock ska din loop inte skriva ut strängar som är längre än 5 tecken. "fine", "FINE", "good" och "sweet" ska alltså skrivas ut men inte "whatisthisstuff?" och "i don't even live here".

För att komma åt hur lång en sträng är kan man använda strlen(), en inbyggd funktion: strlen() @ php.net -->

    <?php
    $ok_array = array("fine", "FINE", "good", "what is this stuff?", "sweet", "i don't even live here");

    for ($i = 0; $i < count($ok_array); $i++) {
        $new_array = $ok_array[$i];
        if (strlen($new_array) <= 5) {
            echo $ok_array[$i] . ', ';
        }
    }
    ?>

    <!-- 6. För att få ut vilket värde en variabel är kan vi använda is_string() t.e.x. som returnerar true eller false baserat på om värdet är en sträng. Detta kan vi sedan använda i en if-sats.

Du ska loopa igenom arrayen $worst_array_yet och ska sedan echoa ut varje sträng som förekommer i arrayen. Men om värdet i arrayen är något annat ska det värdet läggas till i $sum; för att sedan efter att loopen är klar echoa ut. -->

    <?php
    $worst_array_yet = array("string", true, 42, "another string", 54, true, 1);

    for ($i = 0; $i < count($worst_array_yet); $i++) {
        echo $worst_array_yet[$i];
        $current_value = $worst_array_yet[$i];
        if (is_string($current_value)) {
            echo $current_value . '<br>';
        } else {
            $sum += $current_value;
        }
    }
    echo $sum . '<br>';
    ?>
    <br>
    <!-- FUNCTIONS -->
    <!-- 1. Skapa en funktion: multiply, som tar in 2 parametrar. I funktionen, multiplicera dessa nummer med varandra och echo resultatet av multiplikationen. Du får använda vilka namn du vill på parametrarna.
Kalla på din funktion multiply med siffrorna 8,4 som argument
Om du gjort rätt ska du få siffran 32. -->

    <?php
    function multiply($tal1, $tal2)
    {
        return $tal1 * $tal2;
    }
    echo multiply(8, 4);
    ?>
    <br>
    <!-- 2. Skapa en funktion som heter calculate och som istället tar 3 parametrar och sedan multiplicerar de två första parametrarna med varandra och delar värdet med den tredje parametern, alltså: param1 * param2 / param3. Funktionen ska sedan echo ut svaret.
Kalla sedan på din funktion med valfria värden. -->

    <?php
    function calculate($tal1, $tal2, $tal3)
    {
        echo ($tal1 * $tal2) / $tal3;
    }
    calculate(2, 3, 3);
    ?>
    <br>

    <!-- 3. Skriv en funktion som heter highest_number som tar två tal som parametrar.
Funktionen ska sedan jämföra vilket av talet som är störst och echo det största talet.
Kalla på din funktion med två valfria värden. -->
    <?php
    function highest_number($tal1, $tal2)
    {
        if ($tal1 > $tal2) {
            echo $tal1;
        } else {
            echo $tal2;
        }
    }
    highest_number(6, 5);
    ?>
    <br>


    <!-- 4. Koden ovan är dock inte optimal. För det mesta vill vi att funktioner endast returnerar värden. En funktions uppgift ska vara att returnera värden så att vi kan återanvända det värdet och sedan forsätta göra mer beräkningar på det. När vi har massa echo på det här sättet blir koden svårare att återanvända så vi vill nu skriva om våra funktioner så att de endast returnerar värden.
    Refaktorera dina funktioner som du tidigare skapade:

De två första funktionerna (multiply och calculate) ska returnera det slutgiltiga värdet av beräkningarna. Sedan måste du spara värdena för att sedan använda echo på dem.
Den tredje funktionen highest_number ska returnera det högsta värdet av de två värden som skickas in som parametrar. Om dock värdet inte är ett nummer ska funktionen returnera false och om de båda parametrarna är samma värde ska funktionen returnera "Samma värde"
-->
    <?php
    function calculate2($tal1, $tal2, $tal3)
    {
        return ($tal1 * $tal2) / $tal3;
    }
    echo 'Uppgift 4. ' . calculate2(9, 3, 3);
    ?>
    <br>

    <?php
    function highest_number2($tal1, $tal2)
    {
        if ($tal1 > $tal2) {
            return $tal1;
        } else if ($tal1 == $tal2) {
            return 'De har samma värde';
        } else {
            return $tal2;
        }
    }
    echo 'Uppgift 4. ' . highest_number2(1, 10);
    ?>
    <br>

    <!-- 5. Skriv en funktion som tar in en parameter. Parametern ska vara en string. Funktionen ska sedan returnera strängens längd på detta sätt:

"Strängen du matade in är 14 tecken lång" -->

    <?php
    function param($one_param)
    {
        $sum = strlen($one_param);
        return $sum;
    }
    echo 'Strängen du matade in är ' . param('Hej hej eh') . ' tecken lång';
    ?>
    <br>

    <!-- 6. Skapa en funktion som heter convert_string, funktionen ska ta två parametrar. Den första parametern ska vara en sträng som skickas med, typ: "Goodbye World". Den andra parametern som skickas med ska bestämma om strängen ska konverteras till bara stora bokstäver eller bara små bokstäver. Till detta kan man använda hjälpfunktionen: strtolower($string) och strtoupper($string) -->

    <?php
    function convert_string($param1, $param2)
    {
        return $param2($param1);
    }
    echo convert_string('hej hej', strtoupper);
    ?>
    <br>

    <!-- 7. Skapa en funktion som tar en parameter, argumentet som skickas in ska vara en sträng. Funktionen ska sedan returnera det sista tecknet i strängen som skickas in. -->

    <?php
    function lastletter($parameter)
    {
        return substr($parameter, -1);
    }
    echo lastletter('heja');
    ?>
    <br>

    <!-- 8. Skriv en funktion med namnet make_paragraph som skriver ut en sträng som HTML-elementet <p>. Exempel: "hej"_ ska skrivas ut som "<p>hej</p>". Funktionen ska ha en parameter, som är strängen som ska skrivas ut, och den ska inte returnera något bara echoa ut. -->
    <?php
    function make_paragraph($parameter)
    {
        return '<h1>' . $parameter . '</h1>';
    }
    echo make_paragraph('Hejsan svejasankdjfndhfg');
    ?>
    <br>

    <!-- 9. Funktionen make_paragraph() är lite begränsad. Tänk om vi vill göra <h1>-taggar? Eller <h2>, <h3> osv. Skriv en ny funktion med namnet make_heading. Funktionen behöver veta strängen som ska skrivas ut och vilken heading det ska vara. Den behöver alltså två parametrar. -->

    <?php
    function make_paragraph2($parameter, $headingNo)
    {
        return "<h$headingNo>  $parameter  </h$headingNo>";
    }
    echo make_paragraph2('Hellu', 2);
    ?>
    <br>

    <!-- 10. Nu har vi två funktioner som vi kan använda för att skapa HTML-paragrafer och headings. Men det blir väldigt många funktioner om vi ska ha en funktion för varje möjligt HTML-element. Vi behöver en funktion som kan göra flera sorters element. Skriv en funktion make_tag som kan göra alla sorters HTML-element. -->

    <?php
    function make_paragraph3($parameter, $tag)
    {
        return "<$tag>  $parameter  </$tag>";
    }
    echo make_paragraph3('Hellu En h5 heading', h5);
    ?>
    <br>

    <!-- 11. Förbättra make_tag så att man kan ange inline styles också. (Eller href för länkar) Exempel: <p style="color: hotpink;">Exempeltext</p> -->
    <?php
    function make($parameter, $tag, $style, $href)
    {
        if ($style === '' && $href === '') {
            return "<$tag>  $parameter  </$tag>";
        } else if ($style === '' && $href !== '') {
            return "<$tag href=\"$href\">  $parameter  </$tag>";
        } else if ($style !== '' && $href === '') {
            return "<$tag style=\"$style\">  $parameter  </$tag>";
        } else {
            return "<$tag href=\"$href\" style=\"color:$style\">  $parameter  </$tag>";
        }
    }
    echo make('Hejsan detta är en text som tar massa parametrar såsåm href och style', 'h1', 'hotpink;', 'https://nackademin.se');
    ?>
    <br>

    <!-- 12. Skriv en funktion som gör om en array till en lista i HTML. Använd funktionen make_tag. Exempel: make_list( [1, 2] ) → "<ul> <li>1</li> <li>2</li> </ul>" -->
    <?php
    function make_list($array)
    {
        $list = '<ul>';
        foreach ($array as $value) {
            $li = make($value, 'li', '', '');
            $list .= $li;
        }
        $list .= '</ul>';
        return $list;
    }
    echo make_list([3, 4]);
    ?>
    <br>

    <!-- 13. Skriv en funktion som genererar en random färg. -->

    <?php
    function randomColor()
    {
        $r = mt_rand(0, 256);
        $g = mt_rand(0, 256);
        $b = mt_rand(0, 256);
        return "rgb($r, $g, $b);";
    }
    echo randomColor();
    echo make('Hejsan detta är en text som tar massa parametrar såsåm href och style', 'h1', randomColor(), 'https://nackademin.se');
    ?>
    <br>

    <!-- 14. Skriv en funktion som avrundar en float till närmaste heltal med hjälp av typecast.
Exempel: round(3.9) → 3, round(5.5) → 6. -->

    <?php
    function roundinteger($floatno)
    {
        return round($floatno);
    }
    echo roundinteger(3.6);
    ?>

    <?php
    function roundinteger2($floatno)
    {
        return (int)($floatno + 0.5);
    }
    echo roundinteger2(4.6);
    ?>
    <br>

    <!-- 15. Skriv en funktion som räknar ut summan av alla tal i en array. Skriv en annan som räknar ut medelvärdet. -->
    <?php
    function sum_array($arr)
    {
        $calc_sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $calc_sum += $arr[$i];
        }
        return $calc_sum;
    }
    echo sum_array([2, 4, 5, 3, 4, 5]);
    ?>
    <br>

    <?php
    function middle_array($arr)
    {
        $calc_sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $calc_sum += $arr[$i];
            $middle = $calc_sum / count($arr);
        }
        return $middle;
    }
    echo middle_array([2, 4, 5, 3, 4, 5]);
    ?>
    <br>

    <!-- 16. Skriv en funktion som tar en sträng som motsvarar en veckodag som parameter och returnerar en siffra. Om strängen är "måndag" ska funktionen returnera 1, "tisdag" ska bli 2 och "söndag" ska bli 7. Funktionen ska fungera oavsett om veckodagen står med små eller stora bokstäver. -->

    <?php
    function numberDayOfWeek($weekday){
        $lowWeekday = strtolower($weekday);

        switch ($lowWeekday) {
            case 'monday':
                return 1;
                case 'tuesday':
                return 2;
            case 'wednesday':
                return 3;
            case 'thursday':
                return 4;
            case 'friday':
                return 5;
            case 'saturday':
                return 6;
            case 'sunday':
                return 7;
            
            default:
                return 'ops, var detta en siffra eller dagen på engelska?';
        }
    }

    echo numberDayOfWeek('Wednesday');
    ?>



</body>

</html>