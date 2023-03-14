<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function add(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return redirect('/categories')->with('status', 'Category added Successfully!');
    }
    public function edit($id)
    {
        $category = Category::find($id);

        // dd($category);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        //Check edit and upload image if there is none
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->update();

        return redirect('categories')->with('status', 'Category Updated Successfully!!!');
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('categories')->with('status', 'Category deleted successfully');
    }
}
