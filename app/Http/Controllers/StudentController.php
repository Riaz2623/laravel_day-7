<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;
    protected $student;


    public function index()
    {
        return view('add-student');
//        $this->student = new Student();
//        $this->student->newStudent();
//        return 'success';
////        $this->students = Student::getAllStudent();
////        return view('all',['students'=> $this->students]);



    }
    public function create(Request $request)
    {
       $this->student = new student();
       $this->student->name    = $request->name;
       $this->student->email   = $request->email;
       $this->student->mobile  = $request->mobile;
       $this->student->save();

       return redirect()->back()->with('message', 'Student info save successfully.');
    }
    public function manage()
    {
        $this->students = Student::orderBy('id' , 'desc')->get();
        return view('manage-student' , ['students' =>$this->students]);

    }

//    public function update(Request $request)
//    {
//        $this->student = new manage();
//        $this->student->name    = $request->name;
//        $this->student->email   = $request->email;
//        $this->student->mobile  = $request->mobile;
//        $this->student->save();
//
//        return redirect()->back()->with('message', 'Student info save successfully.');
//    }
    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('edit-student',['student'=> $this->student]);

    }
    public function update(Request $request, $id)
    {
        $this->student = Student::find($id);
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();
        return redirect('/manage-student')->with('message' , 'Student info update successfull');
    }
    public function delete($id)
    {
        $this->student = Student::find($id);
        $this->student->delete();
        return redirect('/manage-student')->with('message' , 'Student info delete successfull');


    }
}

