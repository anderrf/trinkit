<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

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
        //DB::enableQueryLog();
        return $sql = self::insert([
            "nm_Category" => $request->input('categoryName')
        ]);
        //dd(DB::getQueryLog());
    }
}
