<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view("students.index", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("students.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = new Student();
        $students->name = $request->name;
        $students->number = $request->number;
        $students->email = $request->email;
        $students->save();
        return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id )
    {
        $students = Student::findOrFail($id);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $students = Student::findOrFail($id);

        // $cruds = Crud::findOrFail($id);
        // $cruds->name = $request->name;
        // $cruds->phone = $request->phone;
        // $cruds->location = $request->location;
        // $cruds->email = $request->email;
        // $cruds->save();
        // return redirect('crud');



        $students->update([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
        ]);
        return redirect('students');
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('students');

        //$students = Student::findOrFail($id);
        //$students->delete();
        //return redirect('students');
    }
}
