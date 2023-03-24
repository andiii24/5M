<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category = new Category();
        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['name'], '-');
        $category->save();

        return redirect()->route('categories')
            ->with('success', 'Category created successfully.');
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
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id . '|max:255',
        ]);
        $category = Category::find($id);
        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['name'], '-');
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
