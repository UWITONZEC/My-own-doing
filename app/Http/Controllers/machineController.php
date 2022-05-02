<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Student;


class machineController extends Controller

{
    public function index()
    {
       // $students=student::all();
        return view ('students.index');
    }
 
    
    public function create()
    {
        return view('students.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
       return back()->with('added','student added');  
     //  return back()->'with('flash_message',!');
    }
  
    
    public function show($id)
    {
        // $student = Student::find($id);
        // return view('students.show')->with('students', $student);
        // dd($student);
    }
    public function search(){
    $search=$_GET['regno'];

    $students=Student::where('studentid','LIKE','%'.$search.'%')->get();
        //dd($items);s
    
        return view('students.search', compact('students'));
    }
    
    
 
    
    public function edit()
    {
        //$users = DB::select('select * from students');
        //return view('edit',['users'=>$users]);
         $student = machine::find($id);
         return view('students.edit')->with('students',$student);
    }
 
  
    public function update(Request $request, $id)
    {
        // $student = machine::find($id);
        // $input = $request->all();
        // $student->update($input);
        // return redirect('machine')->with('flash_message', 'successfully updated!');  
    }
 
   
    public function destroy($id)
    {
      
        
    }
}