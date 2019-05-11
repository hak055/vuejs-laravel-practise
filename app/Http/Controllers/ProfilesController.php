<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class ProfilesController extends Controller
{
   public function index($user)
   {
   		$user = User::findOrFail($user);

   		return view('profiles.index', compact('user')); 
   }
}
