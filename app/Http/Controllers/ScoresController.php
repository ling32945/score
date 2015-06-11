<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Score;

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
        $courses = Score::all();
        $courseArray;
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
            'course_no' => 'required',
            'name'      => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::to('course/create')
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $course = new Course;
            $course->course_no      = Input::get('course_no');
            $course->name           = Input::get('name');
            $course->description    =  Input::get('description');

            $course->save();

            Session::flash('message', 'Successfully created course!');
            return Redirect::to('course');
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
