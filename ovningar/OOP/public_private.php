<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Access modifiers, public/private</title>
    <style>
        .wrapper {
            width: 70%;
            margin: auto;
        }
    </style>
</head>

<body class="wrapper">
    <h1>Access modifiers, public/private</h1>
    <h4>1 . Ändra klassen Book så att title och author är private i stället för public. Försök att skriva ut värdet på title på samma sätt som i uppgift 1.2. Du kommer att få ett felmeddelande. Vad säger meddelandet? Varför får du felet?</h4>

    <p>Svar: Stautskoden blir 500 och inget felemeddelande visas. Felet uppstår eftersom den är privat och inte public.</p>

    <?php
    class Book
    {
        private $title;
        private $author;

        public function __construct($title, $author)
        {
            $this->title = $title;
            $this->author = $author;
        }

        function printInfo()
        {
            echo "Titel: $this->title \nFörfattare: $this->author";
        }
        function setTitle($new_title)
        {
            $this->title = $new_title;
        }
        function getTitle()
        {
            return $this->title;
        }
        function setAuthor($new_author)
        {
            $this->author = $new_author;
        }
        function getAuthor()
        {
            return $this->author;
        }
    }
    ?>
    <hr>
    <h4>2. Skapa två metoder till klassen Book som kan användas för att ändra egenskapen title. Den ena metoden ska heta getTitle och ska returnera värdet på den privata egenskapen title. Den andra metoden ska heta setTitle(x) och ska ändra värdet på title till något som man skickar som argument till funktionen.</h4>
    <ul>
        <li>Public: anyone either inside the class or outside can access them</li>
        <li>Private: only the specified class can access them. Even subclasses will be denied access.</li>
        <li>Protected: only the specified class and subclasses can access them</li>
    </ul>

    <?php
    $first_book = new Book('Främlingen', 'Albert Camus');
    $first_book->printInfo();
    ?>
    <hr>

    <h4>3 . Skapa get- och set-metoder till egenskapen author.</h4>

    <hr>

    <h4>4 . Gör alla egenskaper för klassen Car privata. Behöver du ändra något för att funktionen printInfo ska fungera?</h4>

    <?php
    class Car
    {
        private $model;
        private $color;
        private $price;
        static public $numberOfCars = 0;

        public function __construct($model, $color, $price)
        {
            $this->model = $model;
            $this->color = $color;
            $this->price = $price;
            self::$numberOfCars++;
        }
        public function changeCar($model, $color, $price)
        {
            $this->model = $model;
            $this->color = $color;
            $this->price = $price;
        }
        public function printCarInfo()
        {
            echo "Det här är en $this->color $this->model som kostar $this->price kr <br>";
        }

        public function halfPrice()
        {
            $this->price = $this->price / 2;
        }

        public function sellDate()
        {
            echo "Bilen såldes " . date("Y-m-d") . "<br>";
        }
    }
    $first_car = new Car('BMW', 'Yellow', '25000');
    $second_car = new Car('Suzuki', 'Green', '60000');
    $third_car = new Car('Ferrari', 'Red', '25000000');
    $fourth_car = new Car('Audi', 'White', '3000000');
    $first_car->printCarInfo();
    $first_car->changeCar('Tesla', 'Black', '1000000');
    $first_car->printCarInfo();
    $second_car->printCarInfo();
    $third_car->printCarInfo();
    $fourth_car->printCarInfo();
    echo Car::$numberOfCars . "\n";
    ?>
    <hr>

    <h4>5 . Skriv en metod med namnet changeCar. Den ska ta tre parametrar: model, color och price. När man anropar den ska den ändra värdet på de privata egenskaperna.</h4>

    <hr>
    <h1>Statiska egenskaper och metoder</h1>
    <h4>1. Lägg till en publik statisk variabel i klassen Car med namnet NumberOfCars som är 0. Varje gång ett Car objekt skapas ska NumberOfCars räknas upp med 1. Skapa några Car-objekt och kontrollera att variabeln räknas upp korrekt. PHP.net: Static Keyword</h4>
    <hr>
    <h1>Skapa en Todo-list</h1>
    <h4>Testa att implementera en Todo-list med PHP-classes. Du behöver nog inte använda något arv men måste få två klasser att synka med varandra, liknande SingleBookLibrary. <br>
        Du behöver alltså skapa minst två klasser Tasks/Todos och Task/Todo. Tasks ska hantera de olika Task och spara dessa i en array. Men alla Task ska vara en instans av klassen Task. <br>
        Man tänka sig följande upplägg på Task:</h4>

    <?php
    class Task
    {
        private $title;
        private $createdAt;
        private $complete = false;

        public function __construct($title)
        {
            $this->title = $title;
            $this->createdAt = date('Format String', time());
        }
    }


    class Tasks
    {
        //Array of Task
        private $tasks = array();
        public function addTask($newTask)
        {
            array_push($this->tasks, $newTask);
        }
        public function printOutArr(){
            /* for ($i=0; $i < $this->tasks.length; $i++) { 
            
            } */
        }
    }

    ?>

    <?php
    class SingleBookLibrary
    {
        public $book;
        public $isBorrowed;

        public function borrow()
        {
            if ($this->isBorrowed) {
                echo "Tyvärr, boken är redan utlånad";
            } else {
                echo "Det går bra att låna den här boken, happy reading!";
                $this->isBorrowed = true;
            }
        }
    }
    $library = new SingleBookLibrary();
    $library->isBorrrowed = true;
    $library->book = new Book('Pesten', 'Albert Camus');
    $library->borrow();
    $library->borrow(); // Nu är den utlånad

    ?>


</body>

</html>