<?php

namespace App\Http\Controllers;
use App\Post;

class WelcomeController extends Controller
{

  public function __construct()
   {

   }
   public function index()
    {
    	  return view('welcome');
    }
}
