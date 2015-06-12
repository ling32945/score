<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Score;
use App\Course;
use App\Student;

use View, Validator, Input, Redirect, Session;

class ScoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $courses = Course::all();
        foreach($courses as $course){
            $courseArray[$course['course_no']] = $course['name'];
        }
        return View::make('score.create')
            ->with('courses', $courseArray);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'SID'       => 'required|exists:scores',
            'course_no' => 'required',
            'score'     => 'required|integer|min:0|max:1000'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::to('score/create')
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $score = new Score;
            $score->SID         = Input::get('SID');
            $score->course_no   = Input::get('course_no');
            $score->score       = Input::get('score');

            $score->save();

            Session::flash('message', 'Successfully add score!');
            return Redirect::to('score');
        }
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
