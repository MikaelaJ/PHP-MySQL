<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Övningar Lektion 4</title>
</head>

<body>

    <!-- 1. Skriv en klass med namnet Book. Den ska ha två (publika) egenskaper: title och author. -->
    <?php
    class Book
    {
        public $title;
        public $author;

        public function __construct($title, $author)
        {
            $this->title = $title;
            $this->author = $author;
        }

        function printInfo()
        {
            echo "Titel: $this->title \nFörfattare: $this->author";
        }
        /* function setName($new_title)
        {
            $this->title = $new_title;
        } */
    }

    /* 2. Skapa ett objekt av klassen Book och spara det i en variabel med namnet $first_book. Sätt värdet på egenskaperna title till "Främlingen" och author till "Albert Camus". Testa att du har gjort rätt genom att skriva ut värdet på egenskaperna title och author så här: */
    /* $first_book = new Book;
    $first_book->title = 'Främlingen';
    $first_book->author = 'Albert Camus'; */

    echo "Titel: $first_book->title \nFörfattare: $first_book->author";

    /* 3. Skapa ett till objekt av klassen Book med title: "Harry Potter and the Philosopher's Stone" och author: "J K Rowling". */

    /* $second_book = new Book;
    $second_book->title = "Harry Potter and the Philosopher's Stone";
    $second_book->author = "J K Rowling"; */

    // echo "Titel: $second_book->title \nFörfattare: $second_book->author";

    /* 4. Skapa en metod i klassen som ändrar värdet av title på boken när man kallar på den. Ändra det senaste objektet så att title blir "Harry Potter and the Order of the Phoenix" istället för "Harry Potter and the Philosopher's Stone". */

    // $second_book->setName("Harry Potter and the Order of the Phoenix");

    // echo "Titel: $second_book->title \nFörfattare: $second_book->author";

    /* 5. Skapa en metod i Book med namnet printInfo. Metoden ska inte ta några parametrar. När den anropas ska den skriva ut bokens titel och författaren med echo, i princip som koden i övning 2. */

    /* 6. Lägg till en konstruktor till klassen Book. Konstruktorn ska ta två argument och använda dem för att sätta värdet på egenskaperna title och author. */

    /* 7. Skapa en klass med namnet Car. Den ska ha flera egenskaper: model, color och price. Skapa ett objekt av klassen Car och ge det lämpliga värden på egenskaperna. Skapa även en konstruktor till klassen Car så man direkt kan sätta värdena när man skapar bilen. */

    class Car
    {
        public $model;
        public $color;
        public $price;

        public function __construct($model, $color, $price)
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
    /* 8. Lägg till en metod i Car med namnet printInfo. Metoden ska inte ha några parametrar. När metoden anropas ska den skriva ut information om Car-objektet. Till exempel, om model="Volvo", color="red" och price=25000 så ska funktionen skriva: */

    $first_car = new Car('BMW', 'Yellow', '25000');
    $first_car->printCarInfo();

    /* 9. Skapa en metod i Car med namnet halfPrice. När metoden anropas ska den ändra värdet på egenskapen price till hälften. */

    $first_car->halfPrice();
    $first_car->printCarInfo();

    /* 10. Lägg till en egenskap till klassen Car, sellDate, som motsvarar när bilen såldes. Konstruktorn ska sätta sellDate till dagens datum. Exempel: "2017-03-27". Tips: använd PHP.net: Date */

    $first_car->sellDate();

    /* 11. Skriv en klass med namnet SingleBookLibrary. Den ska ha egenskaper med namnet book och isBorrowed. Egenskapen book ska vara ett objekt av klassen Book. Lägg till en metod med namnet borrow, som ändrar värdet på isBorrowed till true. Metoden ska också skriva ut med echo om det gick att låna, eller om boken redan var utlånad. */

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

    /* Access modifiers, public/private
    1 . Ändra klassen Book så att title och author är private i stället för public. Försök att skriva ut värdet på title på samma sätt som i uppgift 1.2. Du kommer att få ett felmeddelande. Vad säger meddelandet? Varför får du felet? */


    ?>

</body>

</html>