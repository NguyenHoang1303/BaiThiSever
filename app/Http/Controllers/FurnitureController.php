<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    function getAll()
    {
        return Furniture::all();
    }

    function create(Request $request){
        echo $request->get('name');
    }

}
