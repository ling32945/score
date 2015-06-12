<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function main()
    {
        $students = DB::table('students')
            ->leftJoin('scores', 'students.SID', '=', 'scores.SID')
            ->select('students.id', 'students.SID', 'students.name', 'students.email', 'students.mobile', 'students.grade', 'students.class', 'students.status', DB::raw('SUM(scores.score) as total_score'))
            ->groupBy('students.SID')
            ->get();
        $i = 1;
        foreach($students as $student){
            $student->ID = $i;
            $i += 1;
        }
        return view('student.main', compact('students'));
    }

    public function index()
    {
        $students = Student::all();
        $i = 1;
        foreach($students as $student){
            $student["ID"] = $i;
            $i += 1;
        }
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
