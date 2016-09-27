<?php namespace App\Http\Controllers;

use App\Faculty;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateLecturerRequest;
use App\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lecturers=Lecturer::all();

      return view('lecturer.lecturer_index',compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $faculties = Faculty::all();
        return view('lecturer.add_lecturer', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateLecturerRequest $request
     * @return Response
     */
    public function store(CreateLecturerRequest $request)
    {
        $inputs = $request->all();

        $lecturer = new Lecturer($inputs);

        $lecturer->save();

        return redirect('/lecturer');
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
