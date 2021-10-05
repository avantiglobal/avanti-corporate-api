<?php
    // Define the classes and their methods (including parameters and return types) 
    // for a system that consist of a bookshelf, books, magazines, and notebooks. 
    
    // The bookshelf should allow store and retrieval of the items 
    // as well as reporting on the state of the bookshelf: (how many items it has, how many more items it can hold) 
    // and initializing the capacity: (in number of items it can hold in total). 
    
    // The other items should allow reading of a single page given the page number that returns the text of the page. 
    
    // A book has an accessible title and author. 
    // A magazine has an accessible name. 
    // A notebook has an accessible owner.

    class Bookshelf{
        public $capacity = 0;
        public $nItems = 0;
        public $items = array();

        function __construct(int $capacity){
            $this->capacity = $capacity;
        }

        function save(): bool {
            $result = false;
            // Save logic. Gets the new $result value.
            if ($result){
                $this->nItems++;
            }
            return $result;
        }

        function get(): array {
            // 
        }

        function getState(): int {
            return $capacity - $nItems;
        }
    }

    class Book{
        public $title = "";
        public $author = ""
        public $book = array('pageNumber' => NULL, 'pageText' => '');
    }
?>