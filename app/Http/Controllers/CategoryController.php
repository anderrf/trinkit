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
        dd($request->all());
    }
}
