<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function showItems(){
        return view("TopResellerHome",["items" => item::all()]);
    }
    public function detailItem(Item $item){
        return view ("detailItem",["item"=> $item]);
    }
}
