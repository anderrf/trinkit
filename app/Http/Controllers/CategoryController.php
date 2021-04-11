<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('layout.item.addType.category');
    }

    public function saveCategory(Request $request)
    {
        $request->validate([
            "categoryName" => "required|min:3|max:255"
        ]);
        dd($request->all());
    }
}
