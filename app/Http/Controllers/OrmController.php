<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Copy;
use App\Models\User;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function index()
    {
        $authors = Author::find(0);
        return $authors->Book;
          
          //$books = Book::find(1);
          //return $books->Author;
          //return $books;
  
  /*
            $authors = Author::find(3);
          return $authors->Book;
          return $authors;
  
  
           $user1s = User::find(2);
         return $users->Copy;
          return $users;
  
  
         $books = Book::find(4);
         return $books->Copy;
          return $books;
  
  
  
             $exemplaries = Exemplary::find(4);
         return $copies->Book;
          return $copies;
  
  
              $exemplaries = Copy::find(3);
         return $copies->User;
          return $copies;*/
    }
}
