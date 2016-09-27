<?php namespace App\Http\Controllers;

use App\Faculty;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateFacultyRequest;
use Illuminate\Http\Request;

class FacultyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $faculties=Faculty::all();

        return view('faculty.faculty_index',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('faculty.create_faculty');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateFacultyRequest $request)
    {
        $inputs=$request->all();

        $faculty=new Faculty($inputs);

        $faculty->save();

        return redirect('/faculty');
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
        $faculty=Faculty::findOrFail($id);

        return view('faculty.edit_faculty',compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $faculty=Faculty::findOrFail($id);

        $faculty->update(Request::all());

        return redirect('/faculty');
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
