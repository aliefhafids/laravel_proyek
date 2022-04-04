<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employee.create', [
            'categories' => CategoryEmployee::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'categoryemployee_id' => 'required',
            'phone' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Post::create($validatedData);

        return redirect('/dashboard/employee')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('dashboard.employee.show', [
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('dashboard.employee.edit', [
            'employee' => $employee,
            'categories' => CategoryEmployee::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $rules = [
            'name' => 'required|max:255',
            'address' => 'required',
            'categoryemployee_id' => 'required',
            'phone' => 'required',
            'image' => 'image|file|max:1024'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('employee-images');
        }
 
        $validatedData['user_id'] = auth()->user()->id;

        Employee::where('id', $employee->id)
        ->update($validatedData);

        return redirect('/dashboard/employee')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
         if($employee->image){
                Storage::delete($employee->image);
            }
        Employee::destroy   ($employee->id);
        return redirect('/dashboard/employee')->with('success', 'Employee has been deleted!');
    }
}
