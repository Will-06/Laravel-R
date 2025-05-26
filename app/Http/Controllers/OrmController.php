<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas()
{

    $author = Author::find(1);
    $booksOfAuthor = $author->books;

/*
    $book = Book::find(2);
    $authorsOfBook = $book->authors;


    $user = User::find(4);
    $copiesOfUser = $user->copies;


    $copy = Copy::find(5);
    $bookOfCopy = $copy->book;


    $authors = Book::find(1)->authors;

    $books = Author::find(1)->books;


    $sessions = User::find(4)->sessions;

*/

    return [
        'author' => $author,
        /*'booksOfAuthor' => $booksOfAuthor,
        'book' => $book,
        'authorsOfBook' => $authorsOfBook,
        'copies' => $copies,
        'user' => $user,
        'copiesOfUser' => $copiesOfUser,
        'copy' => $copy,
        'bookOfCopy' => $bookOfCopy,
        'authors' => $authors,
        'books' => $books,

       */
    ];
}

}
