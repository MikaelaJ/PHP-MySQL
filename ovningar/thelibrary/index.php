<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Library</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <style>
        .container {
            width: 70%;
            margin: auto;
        }
    </style>
</head>

<body>
    <main class="container">
        <!-- 1. Vad har användaren skrivit in för url? Det är routern som tar hand om det. 
    2. Det första vi gör är att ta redan på vart användare vill gå någonstans, man spara det i en variabel så att man kan återanvända den.
    3. Det som skrivs ut är views, det är en klass som visar data och ska ha så lite logik som möjligt. 
    4.  -->
        <h1>Code Along 2019-04-25</h1>
        <h3>Skriva en biblitekshemsida</h3>
        <hr>

        <h5>Övningar</h5>
        <h6>1. Visa vilken sida användaren befinner sig på. Vi använder CSS-biblioteket Spectre på den här hemsidan, och i sidans navigering använder vi oss av Tabs. Det går att lägga till en klass som heter active på a-taggen för att visa vilken sida som är aktiv. Kolla på $page-variabeln och skriv ut active-klassen om användaren är på rätt sida.</h6>
        <hr>
        <h6>2. Just nu så händer ingenting om användaren försöker gå till en sida som inte finns. Skapa en ny vy som heter PageNotFoundView som skriver ut ett meddelande i en p-tagg om användaren skriver in en sida som inte finns (t.ex. ?page=hats). Använd en default i switch:en i router.php för att visa den.</h6>
        <hr>
        <h6>3. Det är inte så tydligt vad varje fält i tabellen över böcker representerar. Lägg till en table header (<thead>) i tabellen och skriv ut en header för varje fält: Title, Author, Genre, Page Count. Tänk på att eftersom du använder render i BaseView så behöver den skrivas om för att också kunna skriva ut en header. Ändra därför så att render i både BaseView och i BookView nu tar emot TVÅ argument. Skicka också in dina titlar när du kör BookView::render i router.php, t.ex: BookView::render($heads, $data);.</h6>
        <hr>
        <h6>4. Biblioteket lånar inte bara ut böcker, det går att låna CD också. Lägg till en ny modell (t.ex. CDModel), en ny vy (t.ex. CDView) och en ny länk i navigeringen för att visa CD-skivor (t.ex. page=cd). CD-skivorna har lite andra egenskaper än böckerna. Istället för $author och $pageCount så ska CD-skivorna ha $artist och $length.</h6>
        <hr>
        <h6>5. Extra uppgift: Det vore praktiskt att se om böckerna och skivorna redan är utlånade eller inte. Lägg till en $isBorrowed-egenskap i BaseLibraryModel, och lägg även till att du kan sätta $isBorrowed i konstruktorn för BookModel och CDModel. Fixa också så att du kan se om boken är lånad eller inte i tabellen. Du kan t.ex. använda ikoner från Spectre för att göra detta. Spectre Icons: <i class="icon icon-check"></i></h6>
        <hr>
        <h6>6. Extra uppgift: Lägg även till så att biblioteket kan låna ut filmer. Istället för $author eller $artist ska det finnas två nya fält: $director och $actors. $actors ska vara en array med flera olika skådespelare.</h6>


        <?php
        // $_GET hämtar querystring (key/value page=book), om den inte finns så sätter den 'home' (default)
        // isset kollar 'har den här variabeln blivit satt'?
        if (!isset($_GET['page'])) { // $_GET är en superglobal. Tillgänglig överallt. Det man får ut från $_GET är dessa key/value par. 
            $page = 'home';
        } else {
            $page = $_GET['page'];
        }

        require('nav.php');
        require('router.php');
        ?>
    </main>
</body>

</html>