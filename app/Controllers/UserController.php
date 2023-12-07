<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\StudentModel;

class UserController extends BaseController
{
    public function index()
    {
        $sesson = session();
        if($sesson->get('isAdminLoggedIn')){
           return redirect()->to('/pcs/list');
        }
        else{
        ///echo 'User Login Page';
            return view('user/login');
        }
    }

    public function login() {

        $sesson = session();
        $data=array();
        helper(['form']);
       
        

        if($this->request->getMethod()=="post"){
            
        $post = [
                'email' => strip_tags($this->request->getPost('txtEmail')),
                'password' =>  strip_tags($this->request->getPost('txtPassword')),
                
                ];
                
        $rules = [
                    'txtEmail' => ['label'=> 'Email', 'rules'=>'required|max_length[254]|valid_email'],
                    'txtPassword' => ['label'=> 'Password', 'rules'=>'required'],
                    
                ];


        if(!$this->validate($rules)){
            $data['validation'] = $this->validator;
            #dd($data['validation']->listErrors());
        }
        else{
            
            $mdlUser = new \App\Models\UserModel();
            $admin = $mdlUser->where('email',$this->request->getPost('txtEmail'))//adminbrms@gmail.com
            ->where('password',sha1($this->request->getPost('txtPassword')))//123administrator
            ->where('isAdmin',true)
            ->first();

            

            if(!$admin){//
                $sesson->setFlashdata('invalidAccount','Invalid Email or Password');
            }
            else{

                //dd($admin);


                $this->setAdminSession($admin); 
                return redirect()->to('/pcs/list');
            }

            
        
    }
               
        }
        return view('user/login',$data);
        
    }
    public function setAdminSession($admin){
        $data = [
            'id' => $admin['id'],
            'FullName'=> $admin['fullname'],
            'Email'=> $admin['email'],
            'isAdminLoggedIn' => true,
        ];

        session()->set($data);
        
    }

    public function logout(){
        // Destroy user session data
        session()->destroy();
        return redirect()->to('user/login'); // Redirect to login page
    }

    public function userAdd()  {

        $session = session();
        $data = array();
        helper(['form']);

        if($this->request->getMethod() == 'post'){

            $post = [
                'fullName' => strip_tags($this->request->getPost('txtFullName')),
                'program' =>  strip_tags($this->request->getPost('txtProgram')),
                'yearLevel' =>  strip_tags($this->request->getPost('txtYLevel')),
                ];
            
            $rules = [
                'txtFullName' => ['label'=> 'Full Name', 'rules'=>'required'],
                'txtProgram' => ['label'=> 'Program', 'rules'=>'required'],
                'txtYLevel' => ['label'=> 'Year Level', 'rules'=>'required|numeric'],
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
                #dd($data['validation']->listErrors());
            }
            else{

                $mdlUser = new  StudentModel();
               // dd($post);
                $mdlUser->insert($post);
               
                return redirect()->to('user/studentList')->with('success','User Successfully Added.');
            }
    

        }



        return view('user/add',$data);
        
    }
    public function studentList(){

        $mdlUser = new  StudentModel();

        

        $data = [
            'students' => $mdlUser->paginate(10), //display only 10 items per page
            'pager' => $mdlUser->pager,
        ];
        
        return view('user/list',$data);
    }
   
}
