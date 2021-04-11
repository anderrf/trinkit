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
        $request->validate([
            "objectName" => "required|min:3|max:255",
            "objectYear" => "required|int|min:1900|max:2021",
            "objectPhoto" => "required|url|min:3|max:255"
        ]);
        dd($request->all());
    }
}
