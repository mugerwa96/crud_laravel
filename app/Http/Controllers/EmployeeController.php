<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee =new Employee();
        $row=$employee::all();
        
        return view("Employee.employees",['row'=>$row]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view("Employee.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee=new Employee();
        $employee->user_id=Auth::id();
        $employee->username=$request->input('username');
        $employee->location=$request->input('location');
        $employee->save();
      return  redirect('employees')->with('status','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
    
        // return view()
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $employee=new Employee();
        $row=$employee::find($id);
        return view('Employee.edit',["row"=>$row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            
        $employee=Employee::find($id);
      
        $employee->username=$request->input('username');
        $employee->location=$request->input('location');
        $employee->update();
      return  redirect('employees')->with('status','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                    
        $employee=Employee::find($id);
      
        
        $employee->delete();
      return  redirect('employees')->with('status','Deleted Successfully');
    }
}
