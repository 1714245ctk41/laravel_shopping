<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    private $category;
    public function __construct()
    {
        $this->category = new Category();
    }

    public function create()
    {
        $htmlOption = $this->getCategory(0);


        return view('admin.category.add', compact('htmlOption'));
    }
    public function store(Request $request)
    {
        $this->category->create([
            'name' => $request->category_name,
            'parent_id' => $request->select_parent_id,
            'slug' => Str::slug($request->category_name),
        ]);
        return redirect()->route('categories.create');
    }


    public function index()
    {
        $categories = $this->category->latest()->paginate(5);
        return view('admin.category.index', compact('categories'));
    }

    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    public function edit(Category $id)
    {
        $htmlOption = $this->getCategory($id['parent_id']);

        return view('admin.category.edit', compact('id', 'htmlOption'));
    }
    public function update(Request $request, Category $id)
    {

        $id->update([
            'name' => $request->category_name,
            'parent_id' => $request->select_parent_id,
            'slug' => Str::slug($request->category_name),
        ]);
        return redirect()->route('categories.index');
    }

    public function delete(Category $id)
    {
        $id->delete();
        return redirect()->route('categories.index');
    }
}