<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BooksController extends Controller
{
    // get method - get operation
    public function showAllBooks(){
        return book::all();
    }

    // get method - search operation
    public function showThisBook($bk_dtl){
        // return book::where('Book_id',$bk_dtl)->get();
        return book::where('Book_title','like','%'.$bk_dtl.'%')->get();
    }

    public function addBook(Request $req){

        $book = new book;

        $book->Book_title = $req->Book_title;
        $book->Author = $req->Author;
        $book->Release_date = $req->Release_date;
        $book->Price = $req->Price;
        $res = $book->save();
        if($res){
            return ["Result" =>"Book Added to Database Successfully."];
        }
        else{
            return ["Result" =>"Book Not Added"];
        }
    } 

    public function updateBook(Request $req){
        $updbook = book::where('Book_id',$req->Book_id)->update([
            "Book_title" => $req->Book_title,
            "Author" => $req->Author,
            "Release_date" => $req->Release_date,
            "Price" => $req->Price
        ]);

        if($updbook){
            return ["Result" =>"Book Updated to Database Successfully."];
        }
        else{
            return ["Result" =>"Book Updated Failed."];
        }
    }

    public function deleteBook($bk_id){
        $delBook = book::where('Book_id',$bk_id)->delete();
        if($delBook){
            return ["Result"=>"Book Deleted Successfully."];
        }
        else{
            return ["Result"=>"Book Deletion Failed."];
        }
    }

}
