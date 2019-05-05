<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inheritance</title>
    <style>
        .wrapper {
            width: 70%;
            margin: auto;
        }
    </style>
</head>

<body class="wrapper">

    <h1>Inheritance/arv</h1>
    <h4>1 . Skriv minst 2 klasser som motsvarar olika djur. Alla djur ska ha Animal som basklass. Se till att djuren ärver från Animal. Vilka egenskaper eller funktioner skulle vi kunna skapa som är gemensamt för VARENDA djur? Finns det några?</h4>

    <?php
    interface Matinginterface
    {
        public function matingCall($loveIsInTheAir);
    }

    abstract class Animal
    {
        public function eat($typicalFood)
        {
            echo "The animal eats $typicalFood nom nom nom<br>";
        }
        public function zzz()
        {
            echo "The animal sleeps! Shhhuush <br>";
        }
    }

    class Cat extends Animal implements Matinginterface
    {
        public function matingCall($loveIsInTheAir)
        {
            echo "The cats mating call is $loveIsInTheAir <br>";
        }
        public function makeNoise()
        {
            echo "maju";
        }
    }
    class Dog extends Animal implements Matinginterface
    {
        public function matingCall($loveIsInTheAir)
        {
            echo "The dogs mating call is $loveIsInTheAir <br>";
        }
        public function makeNoise()
        {
            echo "vov";
        }
    }
    class Android implements Matinginterface
    {
        public function matingCall($loveIsInTheAir)
        {
            echo "The Android makes $loveIsInTheAir sounds <br>";
        }
    }
    $animal_cat = new Cat;
    $animal_cat->eat('catfood');
    $animal_cat->zzz();
    $animal_cat->matingCall('Mjaaaaauuuu <3');

    $animal_dog = new Dog;
    $animal_dog->eat('dogfood');
    $animal_dog->zzz();
    $animal_dog->matingCall('voffelivoff voff');

    $android_sound = new Android;
    $android_sound->matingCall('robot robot');
    ?>
    <hr>

    <h4>2. Om vi har metoden matingCall() på klassen Animal, hur skulle vi skriva den implementationen? Vad skulle den funktionen echoa ut eller returnera? Var skulle vi annars kunna lägga den?</h4>

    <p>Svar: eftersom matingCall inte är ett generellt ljud för alla djur så är det fördelaktigt att lägga det under repsketive djur/subclass.</p>
    <hr>

    <h4>3. Eftersom vi aldrig egentligen ska skapa ett objekt av typen Animal så kan vi göra om det till en abstrakt klass, en klass som aldrig ska skapas, som bara ska ärvas ifrån. Gör klassen Animal till abstrakt och gör metoden matingCall till abstrakt.</h4>
    <hr>

    <h4>4. Tänk att vi nu har Dog och Cat som klasser, nu kommer även en till klass in i bilden Android. En android är en robot, men det är inget djur. Dock har även en Android ett matingCall. Det betyder att den ska ha samma funktion som Animal men inte ärva utifrån Animal. För detta måste vi ha ett Interface. Skapa ett interface MatingInterface som gör att båda klasserna kan ha metoden matingCall.</h4>
    <hr>

    <h4>5 . Skapa klasserna Planet, Earth och Mars. Planet ska ha en metod som heter visit() som ska skriva ut: <br>
        "Welcome to $this->name! A lap around the sun takes: $this->orbitDays" <br>
        Alla planeter ska alltså ha egenskaperna name samt orbitDays, dessa egenskaper ska själva klassen Planet ha. Utifrån Planet ska man kunna skapa Earth och Mars som två nya klasser som ärver från Planet. Earth och Mars ska bara ta in ett argument i konstruktorn: population. Men när man skapar ett Earth-objekt så måste även name och orbitDays sättas, detta görs i konstruktorn. Detta betyder att du måste kalla på förälderns konstruktor SAMT den egna konstruktorn. När man kallar på visit() på Earth så ska den både kalla på visit() från basklassen samt kalla på visit från den nya subklassen och skriva ut: <br>
        Welcome to $this->name! A lap around the sun takes: $this->orbitDays" and population is : $this->population"; <br>
        Tips: Använd Parent</h4>

    <?php
    class Planet
    {
        protected $name;
        protected $orbitDays;

        public function visit()
        {
            echo "Welcome to $this->name! A lap around the sun takes: $this->orbitDays";
        }
    }
    class Mars extends Planet
    {
        protected $population;

        public function __construct($population)
        {
            
        }
        /* {
            echo "Welcome to $this->name! A lap around the sun takes: $this->orbitDays";
        } */
    }
    class Earth extends Planet
    {
        public $name;
        public $orbitDays;

        public function visit()
        {
            echo "Welcome to $this->name! A lap around the sun takes: $this->orbitDays";
        }
    }
    ?>

</body>

</html>