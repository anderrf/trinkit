<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

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
        if(CategoryModel::addCategory($request))
        {
            return view('layout.item.addType.result', [
                "result" => true,
                "message" => "Categoria adicionada com sucesso!"
            ]);
        }
        else
        {
            return view('layout.item.addType.result', [
                "result" => false,
                "message" => "Falha na adição de categoria!"
            ]);
        }
    }
}
