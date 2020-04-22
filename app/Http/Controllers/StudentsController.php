<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\Teacher;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students = Student::all();
        $count = Student::count();
        return view('Students.index')->with(['student'=>$students,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::all();
        return view('Students.create')->with('Subject',$subject);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Name'=> 'required',
            
        ]);
        $s = new Student;
        $s->name=$request->Name;
       

        $s->save();
        return redirect('Students')->with('Success','Student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        // $subject = Subject::all();
        // $student->subjects()->attach($subject);
        return view('Students.show')->with('s',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s = Student::find($id);
        $Subject = Subject::all();
        $data = array('s'=>$s,'Subject'=>$Subject);

        return view('Students.edit')->with($data);
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
        $this->validate($request,[
            'Name'=> 'required',
            // 'subject'=> 'required',
            // 'Marks'=> 'required',
        ]);
        $s = Student::find($id);
        $s->name=$request->Name;
        // $s->subject_id = $request->subject;
        // $s->marks = $request->Marks;

        $s->save();
        return redirect('Students')->with('Success','Student Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s = Student::find($id);
        $s->delete();
        return redirect('Students')->with('Success','Student Deleted');
    }
    public function selectSubject($id){
        
        $subjects=Subject::all();
        return view('Students.AllSubjects')->with(['subjects'=>$subjects,'id'=>$id]);
    }
    public function selectTeacher($id,$c_id){
        
        
        $subjects = Subject::find($c_id);
        return view('Students.selectTeacher')->with(['subjects'=>$subjects,'id'=>$id]);

    }
    
}
