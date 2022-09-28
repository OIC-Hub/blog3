<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
   function index(){
    return "Admin";
   }
   function users(){
    return 'Users';
   }
}
