<?php
// Variabel som håller reda på vilken sida vi har varit på/är på

require('views.php');
require('models.php');

switch ($page) {
    case 'home':
        HomeView::render();
        break;

    case 'book':
        $header = ['Title', 'Author', 'Genre', 'Pages', 'Available'];
        $data = [
            new BookModel('The Alchemist', 'Paulo Coelho', 'Adventure', 163, false),
            new BookModel('The Da Vinci Code', 'Dan Brown', 'Mystery', 689, true),
            new BookModel('Twilight', 'Stephenie Meyer', 'Romance', 498, false),
        ];
        BookView::render($header, $data);
        break;

        case 'cd':
        $header = ['Title', 'Artist', 'Genre', 'Length (min)', 'Available'];
        $data = [
            new CdModel('Madonna X', 'Madonna', 'Pop', 36, false),
            new CdModel('A Star Is Born', 'Lady Gaga', 'Pop/Soundtrack', 97, true),
            new CdModel('Special Edition', 'Rammstein', 'Hardcore', 68, false),
        ];
        CdView::render($header, $data);
        break;

    default:
        PageNotFoundView::render();
}
