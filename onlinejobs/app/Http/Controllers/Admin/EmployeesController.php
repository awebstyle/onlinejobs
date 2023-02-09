<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Company;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::All();
        return view('admin.employees')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::get();
        return view('admin.addemployee')->with('companies', $companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();

        $employee->empid = $request->input('empid');
        $employee->firstname = $request->input('firstname');
        $employee->lastname = $request->input('lastname');
        $employee->middlename = $request->input('middlename');
        $employee->address = $request->input('address');
        $employee->gender = $request->input('gender');
        $employee->birthday = $request->input('birthday');
        $employee->birthplace = $request->input('birthplace');
        $employee->phone = $request->input('phone');
        $employee->civilstatus = $request->input('civilstatus');
        $employee->position = $request->input('position');
        $employee->hireddate = $request->input('hireddate');
        $employee->email = $request->input('email');
        $employee->companyname = $request->input('companyname');

        $employee->save();

        return back()->with('status', 'The employee has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $companies = Company::where('name', '!=', $employee->companyname)->get();

        return view('admin.editemployee')->with('employee', $employee)->with('companies', $companies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $employee->empid = $request->input('empid');
        $employee->firstname = $request->input('firstname');
        $employee->lastname = $request->input('lastname');
        $employee->middlename = $request->input('middlename');
        $employee->address = $request->input('address');
        $employee->gender = $request->input('gender');
        $employee->birthday = $request->input('birthday');
        $employee->birthplace = $request->input('birthplace');
        $employee->phone = $request->input('phone');
        $employee->civilstatus = $request->input('civilstatus');
        $employee->position = $request->input('position');
        $employee->hireddate = $request->input('hireddate');
        $employee->email = $request->input('email');
        $employee->companyname = $request->input('companyname');

        $employee->update();

        return redirect('/employees');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return back()->with('status', 'The employee has been successfully deleted');
    }
}
