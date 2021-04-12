<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class ObjectModel extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'tb_Object';

    public static function listObjects(int $categoryId, int $limit)
    {
        $sql = self::select([
            "cd_Object",
            "nm_Object",
            "yy_Object",
            "ds_ObjectPhoto",
            "id_Category"
        ])->where("id_Category", "=", $categoryId)
        ->limit($limit);

        return $sql->get();
    }

    public static function addObject(Request $request)
    {
        return $sql = self::insert([
            "nm_Object" => $request->input('objectName'),
            "yy_Object" => $request->input('objectYear'),
            "ds_ObjectPhoto" => $request->input('objectPhoto'),
            "id_Category" => $request->input('categoryId')
        ]);
    }
}
