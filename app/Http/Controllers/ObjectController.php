<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\ObjectModel;

class ObjectController extends Controller
{
    public function addObject($categoryId)
    {
        //Retorna view com form de adição de objeto, com parâmetro $categoryId
        return view('layout.item.addType.object', [
            "categoryId" => $categoryId
        ]);
    }

    public function saveObject(Request $request)
    {
        //Valida valores recebidos dos inputs de adicionar/objeto
        $request->validate([
            "objectName" => "required|min:3|max:255",
            "objectYear" => "required|int|min:1900|max:" . Carbon::now()->format('Y'),
            "objectPhoto" => "required|url|min:3|max:255"
        ]);
        //Usa o método de salvar da model, e retorna bool para mostra de resultado
        if(ObjectModel::addObject($request))
        {
            return view('layout.item.addType.result', [
                "result" => true,
                "message" => "Objeto adicionado com sucesso!"
            ]);
        }
        else
        {
            return view('layout.item.addType.result', [
                "result" => false,
                "message" => "Falha na adição de objeto!"
            ]);
        }
    }

    public static function getObjects(int $categoryId, int $limit)
    {

    }
}
