<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id','desc')->get();
        return view('course.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
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
            'course_name' => 'required',
            'duration' => 'required',
            'description' => 'max:150',
            'price' => 'required',
            'slug' => 'required'
        ]);

        $course = new Course;

        $course->course_name = $request->course_name;
        $course->duration = $request->duration;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->slug = $request->slug;

        if($course->save()){
                
            return response()->json(['success_info'=>'<h6>You have succesfully added a new course!</h6>']);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);

        return view('course.edit')->with('course',$course);
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

            'course_name' => 'required',
            'duration' => 'required',
            'description' => 'max:150',
            'price' => 'required',
            'slug' => 'required'
        ]);

            $course = Course::find($id);

            $course->course_name = $request->course_name;
            $course->duration = $request->duration;
            $course->description = $request->description;
            $course->price = $request->price;
            $course->slug = $request->slug;

            $course->save();

            return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);

        $course->delete();

        return redirect()->back();
    }
}
