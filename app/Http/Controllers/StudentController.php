<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classe;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students'] = Student::all();
        $data['classes'] = Classe::all();

        return view('students.index', $data);


        /* $students = Student::latest()->paginate(5);
        return view('home', compact('students'));  */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['students'] = Student::all();
        $data['classes'] = Classe::all();

        return view('students.create', $data);

        /* return view('students.create'); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'class' => 'required',
            'class_roll' => 'required',
            'details' => 'required',
        ]);

        //creat a new product
        Student::create($request->all());

        //redirect the user and send friendly message
        return redirect()->route('students.index')->with('success','Student added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //validate the input
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'class' => 'required',
            'class_roll' => 'required',
            'details' => 'required',
        ]);

        //creat a new product
        $student->update($request->all());

        //redirect the user and send friendly message
        return redirect()->route('students.index')->with('success','Student Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success','Student deleted successfully');

    }
}
