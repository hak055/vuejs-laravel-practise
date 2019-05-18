<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageItem;

class PageItemController extends Controller
{
    public function index()
    {
    	return view('items.index');
    }

    public function storeItem(Request $request)
    {
    	$pageItem = new PageItem();
    	$pageItem->create($request->all());

    }
}
