<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{

    public function home()
    {
        return view('layout/header')
        . view('home')
        . view('layout/footer');
        
    }




    public function index()
    {
        return view('layout/header')
        . view('login')
        . view('layout/footer');
        
    }



    public function profile ()
    {
        $data = array();
    
        $data['nama'] = "SITI NUR AIESHAH BINTI ZAHARI";
        $data['username'] = "AIESHAH";
        $data['email'] = "aieshahzahari@gmail.com";
        $data['password'] = "aieshah123";



        return view('layout/header')
        . view('profile',$data)
        . view('layout/footer');
    }



    

    public function register()
    {
        return view('layout/header')
        . view('register')
        . view('layout/footer');
    }

   


}