<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;
class UserController extends Controller
{
    //
    public function index(){


    }
    public function getphonefromuser(){
        return User::find(1)->phone->number;
    }
    public function getuserfromphone(){
        return Phone::find(1)->user->name;
    }
     public function getrolesfromuser(){
        return User::find(1)->roles[1]->name;

   }

}
