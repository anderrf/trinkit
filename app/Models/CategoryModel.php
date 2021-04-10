<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'tb_Category';

    public static function listCategory(int $limit)
    {
        $sql = self::select([
            "cd_Category",
            "nm_Category"
        ])
        ->limit($limit);

        dd($sql->toSql());
    }

    public static function addCategory(Request $request)
    {
        $sql = self::insert([
            "nm_Category" => $request->input('categoryName')
        ]);

        dd($sql->toSql(), $request->all());
    }
}
