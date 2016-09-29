<?php namespace App\Http\Controllers;

use App\Course;
use App\Faculty;
use App\Http\Requests;
use App\Http\Requests\CreateCourseRequest;

class CourseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('course.course_index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $faculties = Faculty::all();

        return view('course.create_course', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateCourseRequest $request
     * @return Response
     */
    public function store(CreateCourseRequest $request)
    {
        $inputs = $request->all();
        $course = new Course($inputs);
        $course->save();
        return redirect('/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $faculties = Faculty::all();

        return view('course.edit_course', compact('course', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
