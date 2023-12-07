<?php

namespace App\Controllers;

class BookRentalController extends BaseController
{
    public function index()
    {
        $data = array();
        helper(['form']);

        $student_model = new \App\Models\StudentModel();
        $book_model = new \App\Models\BooksModel();

        $rental_model = new \App\Models\RentalModel();

   		

          

       return view('books/rent', $data);
    }
  
}