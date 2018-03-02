<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Books as Book;
use \App\Genre as Genre;
use \App\Translation as Translation;

class NavController extends Controller
{
    public function home()
    {
        /*$ducks = [
            [
                "size" => "10",
                "weight" => "20",
                "name" => "Howard",
            ],
            [
                "size" => "12",
                "weight" => "34",
                "name" => "biliard",
            ],
            [
                "size" => "1",
                "weight" => "68",
                "name" => "jean michel",                
            ],
            ];*/

            $books = Book::all();
            dd($books[1]->translations);
            $genres = Genre::all();
            dd($genres[0]->books);
            return view('welcom', ['books' => $books, 'genres' => $genres]);

          }

          public function insert()

          {

            $arrayGenres = [];
            $genres = Genre::all();
            foreach ($genres as $genre) {
            $arrayGenres[$genre->id] = $genre->name;
            

            }


            $translations = Translation::all(); 
            return view('insert', ['genres' => $arrayGenres, 'translations' => $translations]);

            }

            public function update(Request $request)

            {

                $book = Book::findOrFail($request->input('id'));
                $arrayGenres = [];
                $genres = Genre::all();
                foreach ($genres as $genre) {
                    $arrayGenres[$genre->id] = $genre->name;

            }
            return view('update', ['book' => $book, 'genres' => $arrayGenres]);

            }
             
          public function insertGenre()

          {

              return view('inserGenre');

          }
}
