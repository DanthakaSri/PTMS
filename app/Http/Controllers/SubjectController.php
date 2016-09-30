<?php namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests;
use App\Http\Requests\CreateSubjectRequest;
use App\Subject;

class SubjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subjects=Subject::all();




        return view('course.subject_index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $id
     * @return Response
     */
    public function create($id)
    {
        $course = Course::findOrFail($id);

        return view('course.create_subject',compact('course'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateSubjectRequest $request
     * @return Response
     */
    public function store(CreateSubjectRequest $request)
    {
        $inputs=$request->all();

        $subject=new Subject($inputs);

        $subject->save();

        return redirect('/subject');
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
        //
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
