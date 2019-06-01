<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageItem;

class PageItemController extends Controller
{
	public function getItems()
	{
		$pageItem = PageItem::orderBy('id', 'desc')->get();
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

    public function deleteItem(Request $request)
    {
    	PageItem::find($request->id)->first()->delete();
    }

    public function editItems(Request $request, $id)
    {
    	$data =Data::where('id', $id)->first();
		$data->name = $request->get('val_1');
		$data->age = $request->get('val_2');
		$data->profession = $request->get('val_3');
		$data->save();
		return $data;
    }
}
