<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function save(Request $request)
    {
        $rules = [
            'first_name'=>'required|string',
            'address'=>'required|string',
            'dateOfBirth'=>'required|string',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //Method 01
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->contact_no = $request->contact_no;
        $student->address = $request->address;
        $student->dateOfBirth = $request->dateOfBirth;
        $student->save();


        //Method 02
        //$student = Student::create($request->all());
        
        //return "successfully saved";


        return redirect()->route('student.index');
    }


    public function edit($student_id){
       $student = Student::where('id',$student_id)->first();
       return view('Student.edit',compact('student'));
    }

    public function update(Request $request, $student_id){

        $rules = [
            'first_name'=>'required|string',
            'address'=>'required|string',
            'dateOfBirth'=>'required|string',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $student = Student::where('id',$student_id)->first();
        
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->contact_no = $request->contact_no;
        $student->dateOfBirth = $request->dateOfBirth;

        $student->save();

        return redirect()->route('student.index');

    }

    public function delete ($student_id){
        Student::where('id',$student_id)->delete();
        return redirect()->route('student.index');
    }
}
