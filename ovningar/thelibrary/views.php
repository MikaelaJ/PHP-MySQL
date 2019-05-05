<?php
// Basklass för att rita ut tabellen
class BaseView
{


    public static function render($header, $body)
    {
        $out = '';
        $out .= '<table class="table table-striped table-hover">';
        $out .= '<thead>';
        $out .= '<tr>';
        $out .= $header;
        $out .= '</tr>';
        $out .= '</thead>';
        $out .= '<tbody>';
        $out .= $body;
        $out .= '</table>';
        $out .= '</tbody>';
        return $out;
    }
}

class BookView extends BaseView
{
    public static function render($heads, $books)
    {
        $header = '';
        foreach ($heads as $head) {
            $header .= '<th>' . $head . '</th>';
        }

        $body = '';
        foreach ($books as $book) {
            $body .= '<tr>';
            $body .= '<td>' . $book->title . '</td>';
            $body .= '<td>' . $book->author . '</td>';
            $body .= '<td>' . $book->genre . '</td>';
            $body .= '<td>' . $book->pageCount . '</td>';
            $body .= '<td>';
            if ($book->isBorrowed) {
                $body .= '<i class="icon icon-cross"></i>';
            } else {
                $body .= '<i class="icon icon-check"></i>';
                $book->isBorrowed = true;
            };
            $body .= '</td>';
            $body .= '</tr>';
        }
        echo parent::render($header, $body);
    }
}

class CdView extends BaseView
{
    public static function render($heads, $cds)
    {
        $header = '';
        foreach ($heads as $head) {
            $header .= '<th> ' . $head . ' </th> ';
        }

        $body = '';
        foreach ($cds as $cd) {
            $body .= '<tr>';
            $body .= '<td>' . $cd->title . '</td>';
            $body .= '<td>' . $cd->artist . '</td>';
            $body .= '<td>' . $cd->genre . '</td>';
            $body .= '<td>' . $cd->lengthCd . '</td>';
            $body .= '<td>';
            if ($cd->isBorrowed) {
                $body .= '<i class="icon icon-cross"></i>';
            } else {
                $body .= '<i class="icon icon-check"></i>';
                $cd->isBorrowed = true;
            };
            $body .= '</td>';
            $body .= '</tr>';
        }
        echo parent::render($header, $body);
    }
}


class HomeView
{
    public static function render()
    {
        echo '<p>Welcome to the library! Please look around for something to borrow.</p>';
    }
}
class PageNotFoundView
{
    public static function render()
    {
        echo '<p>This page does not exist</p>';
    }
}
