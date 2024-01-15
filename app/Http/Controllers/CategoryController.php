<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    // index
    public function index(Request $request)
    {
        // get categories with pagination
        $categories = Category::where('name', 'like', '%'.$request->search.'%')
            ->paginate(10);
        return view('pages.category.index', compact('categories'));
    }

    // create
    public function create()
    {
        return view('pages.category.create');
    }

    // store
    public function store(Request $request)
    {
        $data = $request->all();
        Category::create($data);
        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    // // show
    // public function show($id)
    // {
    //     return view('pages.dashboard');
    // }

    // edit
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.category.edit', compact('category'));
    }

    // update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $category = Category::findOrFail($id);
        $category->update($data);
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    // destroy
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
