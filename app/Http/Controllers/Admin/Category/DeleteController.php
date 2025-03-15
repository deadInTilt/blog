<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Comment\UpdateRequest;
use App\Models\Category;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
