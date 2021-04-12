<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;

class ListController extends Controller
{
    public function showCategoryList()
    {
        return view('layout.item.list', [
            "categories" => $this->getCategories() ? $this->getCategories() : null
        ]);
    }

    public function showObjectsByCategory($categoryId)
    {
        return view('layout.item.objectList.objectList', [
            "categories" => $this->getCategories() ? $this->getCategories() : null,
            "categoryId" => $categoryId
        ]);
    }

    public function getCategories()
    {
        $categories = CategoryController::getCategories(10);
        return $categories;
    }
}
