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

    public static function listObject(int $limit)
    {
        $sql = self::select([
            "cd_Object",
            "nm_Object",
            "yy_Object",
            "ds_ObjectPhoto"
        ])
        ->limit($limit);

        dd($sql->toSql());
    }

    public static function addObject(Request $request)
    {
        $sql = self::insert([
            "nm_Object" => $request->input('objectName'),
            "yy_Object" => $request->input('objectYear'),
            "ds_ObjectPhoto" => $request->input('objectPhoto')/*,
            "id_Category" => $request->input('categoryId')*/
        ]);

        dd($sql->toSql(), $request->all());
    }
}
