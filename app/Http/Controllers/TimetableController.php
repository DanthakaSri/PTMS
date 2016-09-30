<?php namespace App\Http\Controllers;

use App\Hall;
use App\Http\Requests;
use App\Http\Requests\CreateTimetableRequest;
use App\Subject;
use App\Timetable;

class TimetableController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $subjects = Subject::all();
        $halls = Hall::all();
        return view('timetable.schedule_timetable', compact('subjects', 'halls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateTimetableRequest $request
     * @return Response
     */
    public function store(CreateTimetableRequest $request)
    {
        $back = "rgb(55, 53, 195)";

        $inputs = $request;

        $details = Subject::findOrFail($inputs->subject_id);

        $inputs['faculty_name'] = $details->course->faculty->name;
        $inputs['course_name'] = $details->course->name;

        $timetable = new Timetable();
        $timetable->name = $inputs->name;
        $timetable->start = $inputs->start;
        $timetable->faculty_name = $details->course->faculty->name;
        $timetable->course_name = $details->course->name;
        $timetable->type = "lecture";
        $timetable->allDay = true;
        $timetable->color = $back;
        $timetable->hall_name = $inputs->hall;
        $timetable->title = $details->name;
        $timetable->save();

        return redirect('/timetable/create');
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
