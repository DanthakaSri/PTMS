<?php namespace App\Http\Controllers;

use App\Faculty;
use App\Hall;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateHallRequest;
use Illuminate\Http\Request;

class HallController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $halls = Hall::all();

        return view('hall.hall_index',compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $faculties=Faculty::all();
        return view('hall.create_hall',compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateHallRequest $request
     * @return hall page
     */
    public function store(CreateHallRequest $request)
    {
        $inputs = $request->all();

        $hall = new Hall($inputs);
        $hall->save();
        return redirect('/hall');
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
        $hall = Hall::findOrFail($id);
        $faculties=Faculty::all();
        return view('hall.edit_hall',compact('hall','faculties'));

//        return $hall->faculty->name;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

        $update=Requests::all();
        $hall=Hall::findOrFail($id);

        $hall->update($update);

        return redirect('/hall');
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
