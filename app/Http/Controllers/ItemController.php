<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $item = Item::get();
        return view ('inventory_list',
        [
            'list' => $item
        ]);
    }

    public function create()
    {
        return view ('input_equipment',[
            'title' => 'Add',
            'method' => 'POST',
            'action' => 'item'
        ]);
    }

    public function store (Request $request)
    {
        $item = new Item;
        
        $item->name_item = $request->name_item;
        $item->username = $request->username;
        $item->brand_item = $request->brand_item;
        $item->quantity_item = $request->quantity_item;
        $item->type_item = $request->type_item;
        $item->description_item = $request->description_item;
        $item->save();
        return redirect('/item');
    }


}
