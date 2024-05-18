<?php

class Book {
    private $title, $availableCopies;

    function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    //get title
    public function getTitle() {
        return $this->title;
    }
    //get available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }
    public function returnBook() {
        return $this->availableCopies++;
    }

}

class Member {
    private $name;

    function __construct($name) {
        $this->name = $name;
    }

    //get name
    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        $book->borrowBook();

    }

    public function returnBook($book) {
        $book->returnBook();

    }

}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$member1->borrowBook($book1);
$member2->borrowBook($book2);

echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";
