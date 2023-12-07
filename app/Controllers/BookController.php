<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BooksModel;

$pager = \Config\Services::pager();

class BookController extends BaseController
{
    public function index()
    {
        //
        return view('books/index');
    }
    
    
    public function createBook(){
      //  helper('form');

        //call the form
       // return view('books/add');
    }


    public function bookStore(){

        $session = session();
      
        $data = array();

        helper(['form']);
       if($this->request->getMethod() == 'post'){

        $post = [
            'title' => strip_tags($this->request->getPost('txtTitle')),
            'author' =>  strip_tags($this->request->getPost('txtAuthor')),
            'year' =>  strip_tags($this->request->getPost('txtYear')),
            ];
            
       $rules = [
                'txtTitle' => ['label'=> 'Book Title', 'rules'=>'required'],
                'txtAuthor' => ['label'=> 'Author', 'rules'=>'required'],
                'txtYear' => ['label'=> 'Year', 'rules'=>'required|numeric'],
            ];

       
       if(!$this->validate($rules)){
            $data['validation'] = $this->validator;

        }
        else{
            $mdlBook = new  BooksModel();
       
          
            $mdlBook->insert($post);
            return redirect()->to('/')->with('success','Book Successfully Added.');

        }
       

        }
      

        return view('books/add',$data);
    }

    public function bookList()  {
        
        $mdlBook = new  BooksModel();

        #$data['books'] = $mdlBook->findAll();

        $data = [
            'books' => $mdlBook->paginate(10), //display only 10 items per page
            'pager' => $mdlBook->pager,
        ];
        
        return view('books/list',$data);
    }


    public function bookView($id) {
        $session = session();
        $data = array();
        helper(['form']);

        $mdlBook = new  BooksModel();
        $data['books'] = $mdlBook->find($id);
       //dd($data);

        return view('books/edit',$data);
    }

    public function bookUpdate($id){

        $session = session();
        $data = array();
        helper(['form']);
      
        $mdlBook = new  BooksModel();
        if($this->request->getMethod() == 'post'){
            $dataPost = [
                'title' =>  strip_tags($this->request->getPost('txtTitle')),
                'author' =>  strip_tags($this->request->getPost('txtAuthor')),
                'year' =>  strip_tags($this->request->getPost('txtYear')),
            ];

            $rules = [
                'txtTitle' => ['label'=> 'Book Title', 'rules'=>'required'],
                'txtAuthor' => ['label'=> 'Author', 'rules'=>'required'],
                'txtYear' => ['label'=> 'Year', 'rules'=>'required|numeric'],
            ];
            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }
            else{
                

                $mdlBook->update($id,$dataPost);
                return redirect()->to('/')->with('success-update','Book Successfully Updated.');
            }
        }
        $data['books'] = $mdlBook->find($id);
        return view('books/edit',$data);

    }

    public function bookViewDelete($id) {
        $mdlBook = new  BooksModel();
        $data['books'] = $mdlBook->find($id);
        #dd($data);

        return view('books/view',$data);
    }

    public function bookDelete($id)  {
       
       
        $mdlBook = new  BooksModel();
        $mdlBook->delete($id);
        return redirect()->to('/')->with('success-delete','Book Successfully Deleted.');
        
    }
}