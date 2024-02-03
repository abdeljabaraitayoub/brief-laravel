<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
// use App\Http\Requests\request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categories = Category::all();
        return view('category.index', compact('Categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecategoryRequest $request)
    {
        $category = new category();
        $category->title = $request->title;
        $category->save();
        return  redirect()->route('category.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $request, $id)
    {
        $category = category::find($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoryRequest $request, $id)
    {

        $category = category::find($id);
        $category->title = $request->title;
        $category->save();
        return redirect()->route('category.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category, $id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect()->route('category.index');
        //
    }

    public function getCSRFToken()
    {
        echo csrf_token();
        return csrf_token();
    }
}
