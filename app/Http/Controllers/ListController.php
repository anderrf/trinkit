<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;

class ListController extends Controller
{
    public function showList()
    {
        return view('layout.item.list', [
            "categories" => $this->getCategories() ? $this->getCategories() : null
        ]);
    }

    public function getCategories()
    {
        $categories = CategoryController::getCategories(10);
        return $categories;
    }
}
