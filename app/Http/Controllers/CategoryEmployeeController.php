<?php

namespace App\Http\Controllers;

use App\Models\CategoryEmployee;
use App\Http\Requests\StoreCategoryEmployeeRequest;
use App\Http\Requests\UpdateCategoryEmployeeRequest;

class CategoryEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryEmployee  $categoryEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryEmployee $categoryEmployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryEmployee  $categoryEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryEmployee $categoryEmployee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryEmployeeRequest  $request
     * @param  \App\Models\CategoryEmployee  $categoryEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryEmployeeRequest $request, CategoryEmployee $categoryEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryEmployee  $categoryEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryEmployee $categoryEmployee)
    {
        //
    }
}
