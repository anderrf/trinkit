<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectController extends Controller
{
    public function addObject()
    {
        return view('layout.item.addType.object');
    }

    public function saveObject(Request $request)
    {
        dd($request->all());
    }
}
