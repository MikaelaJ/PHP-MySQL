<?php
    abstract class BaseLibraryModel
    {
        public $title;
        public $genre;
        public $isBorrowed;
    }

    class BookModel extends BaseLibraryModel
    {
        public $author;
        public $pageCount;

        public function __construct($title, $author, $genre, $pageCount, $isBorrowed)
        {
            $this->title = $title;
            $this->author = $author;
            $this->genre = $genre;
            $this->pageCount = $pageCount;
            $this->isBorrowed = $isBorrowed;
        }
    }
    
    class CdModel extends BaseLibraryModel
    {
        public $artist;
        public $lengthCd;
        
        public function __construct($title, $artist, $genre, $lengthCd, $isBorrowed)
        {
            $this->title = $title;
            $this->artist = $artist;
            $this->genre = $genre;
            $this->lengthCd = $lengthCd;
            $this->isBorrowed = $isBorrowed;
        }
    }
?>