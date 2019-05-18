<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageItem;

class PageItemController extends Controller
{
	public function getItems()
	{
		$pageItem = PageItem::all();
		return $pageItem;
	}
    

    public function storeItem(Request $request)
    {
    	$pageItem = new PageItem();
    	$pageItem->name = $request->name;    	
		$pageItem->age = $request->age;
		$pageItem->profession = $request->profession;
		$pageItem->save();
		return $pageItem;

    }
}
