<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menuitem;

class MenuitemController extends Controller
{
    public function getItems(){
        return Menuitem::all();
    }
}
