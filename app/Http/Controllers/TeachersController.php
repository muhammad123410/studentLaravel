<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Subject;
use App\Student;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        $count = Teacher::count();
        return view('teacher.index')->with(['teachers'=>$teachers,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = Subject::all();

        return view('teacher.create')->with('Subject',$subject);
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
            'name'=> 'required',
        ]);
        $s = new Teacher;
        $s->name=$request->name;
        
        

        $s->save();
        return redirect('teacher')->with('Success','Teacher Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $s = Teacher::find($id);

        return view('teacher.show')->with('s',$s);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s = Teacher::find($id);
        return view('teacher.edit')->with('s',$s);
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
            
            
        ]);
        $s = Teacher::find($id);
        $s->name = $request->Name;
        
        

        $s->save();
        return redirect('teacher')->with('Success','Teacher Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s = Teacher::find($id);
        $s->delete();

        return redirect('teacher')->with('Success','Teacher removed');
    }
    public function selectSubject($id){
        
        $subjects=Subject::all();
        return view('teacher.AllSubjects')->with(['subjects'=>$subjects,'id'=>$id]);
    }
    public function viewStudents($id){
        


        return view('teacher.viewStudents')->with('teacher', $teacher);
    }
}
