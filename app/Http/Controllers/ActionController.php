<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book as Book;
class ActionController extends Controller
{
    public function insertOne(Request $request)
    {
      $newBook = new Book();
      $newBook->title = $request->input('title');
      $newBook->author = $request->input('author');
      $newBook->excerpt = $request->input('excerpt');
      $newBook->excerpt = $request->input('genre');


      $newBook->save();
      foreach($request->input('translations') as $translation){
          $newBook->translations()->attach($translation);
      }
      return redirect('/');
    }
    public function deleteOne(Request $request)
    {
      Book::destroy($request->input('id'));
      return redirect('/');
    }
    public function updateOne(Request $request)
    {

      $Book = Book::find($request->input('id'));
      $Book->title = $request->input('title');
      $Book->author = $request->input('author');
      $Book->excerpt = $request->input('excerpt');
      $Book->excerpt = $request->input('genre');

   {
      dd($request->input());
    }

}
}