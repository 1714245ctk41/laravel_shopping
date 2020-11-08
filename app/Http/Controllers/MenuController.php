<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Menu;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    private $menu;
    public function __construct()
    {
        $this->menu = new Menu();
    }
    public function index()
    {
        $menus = $this->menu->latest()->paginate(5);
        return view('admin.menus.index', compact('menus'));
    }
    public function getMenu($parentId)
    {
        $data = $this->menu->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }
    public function create()
    {
        $htmlOption = $this->getMenu(0);


        return view('admin.menus.add', compact('htmlOption'));
    }
    public function store(Request $request)
    {
        $this->menu->create([
            'name' => $request->menu_name,
            'parent_id' => $request->select_parent_id,
            'slug' => Str::slug($request->menu_name),
        ]);
        return redirect()->route('menus.create');
    }
    public function edit(Menu $id)
    {
        $htmlOption = $this->getMenu($id['parent_id']);
        return view('admin.menus.edit', compact('id', 'htmlOption'));
    }
    public function update(Menu $id, Request $request)
    {
        $htmlOption = $this->getMenu($id['parent_id']);

        $id->update([
            'name' => $request->menu_name,
            'parent_id' => $request->select_parent_id,
            'slug' => Str::slug($request->menu_name),
        ]);
        return view('admin.menus.edit', compact('id', 'htmlOption'));
    }
    public function delete(Menu $id)
    {
        $id->delete();
        return redirect()->route('menus.index');
    }
}