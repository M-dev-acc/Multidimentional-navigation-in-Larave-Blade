<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Items;

class MenuController extends Controller
{
    public function home()
    {
        $menu = Menu::all();

        return view('welcome', compact('menu'));
    }
}
