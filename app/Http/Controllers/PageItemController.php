<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageItemController extends Controller
{
    public function index()
    {
    	return view('items.index');
    }

    public function storeItems(Request $item)
    {
    	//
    }
}
