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
        $item = new Furniture();
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->avatar = $request->input('avatar');
        $item->code = $request->input('code');
        $item->save();
        return http_response_code(201);
    }

    function search(){}

}
