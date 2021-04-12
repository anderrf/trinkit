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
            "objects" => $this->getObjects($categoryId) ? $this->getObjects($categoryId) : null,
            "categoryId" => $categoryId
        ]);
    }

    public function getCategories()
    {
        $categories = CategoryController::getCategories(10);
        return $categories;
    }

    public function getObjects($categoryId)
    {
        $objects = ObjectController::getObjects($categoryId, 50);
        return $objects;
    }
}
