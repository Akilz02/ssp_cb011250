<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use App\Http\Requests\StoreMenuCategoryRequest;
use App\Http\Requests\UpdateMenuCategoryRequest;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.menu_category.index', [
            'menu_categories' => MenuCategory::orderBy('id', 'DESC')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu_category.form', [
        'menu_category' => new MenuCategory(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuCategoryRequest $request)
    {
        (new MenuCategory())->create($request->all());
        return redirect()->route('menu-category.index')->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuCategory $menuCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuCategory $menuCategory)
    {
        return view('admin.menu_category.form', [
            'menu_category' => $menuCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuCategoryRequest $request, MenuCategory $menuCategory)
    {
        $menuCategory->update($request->all());
        return redirect()->route('menu-category.index')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuCategory $menuCategory)
    {
        $menuCategory->delete();

        return redirect()->route('menu-category.index')->with('success', 'User deleted successfully!');
    }
}
