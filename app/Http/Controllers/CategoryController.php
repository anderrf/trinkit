<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function addCategory()
    {
        //Retorna view com form de adição de categoria
        return view('layout.item.addType.category');
    }

    public function saveCategory(Request $request)
    {
        //Valida valores recebidos dos inputs de adicionar/objeto
        $request->validate([
            "categoryName" => "required|min:3|max:255"
        ]);
        //Usa o método de salvar da model, e retorna bool para mostra de resultado
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

    public static function getCategories(int $limit)
    {
        $categories = CategoryModel::listCategories($limit);
        if($categories)
        {
            return $categories;
        }
        else
        {
            
        }
    }
}
