<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Timetable;

class TimetableManageController extends Controller {


    public function index()
    {
        $data = array(); //We declare a major array that will contain the data | declaramos un array principal que va contener los datos
        $id = Timetable::all()->lists('id'); //id we list all events | listamos todos los id de los timetables
        $title = Timetable::all()->lists('title'); //the same for the place and date | lo mismo para lugar y fecha
        $start = Timetable::all()->lists('start');
        $end = Timetable::all()->lists('end');
        $allDay = Timetable::all()->lists('allDay');
        $faculty_name = Timetable::all()->lists('faculty_name');
        $course_name = Timetable::all()->lists('course_name');
        $hall_name = Timetable::all()->lists('hall_name');
        $background = Timetable::all()->lists('color');
        $count = count($id); //we ids obtained to know the exact number of events | contamos los ids obtenidos para saber el numero exacto de timetables

        // We nesting cycle values ​​obtained our main array $ data |  hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data
        for ($i = 0; $i < $count; $i++)
        {
            $data[$i] = array(
                "title"           => $title[$i], //mandatory "title", "start" and "url" fields are required | obligatoriamente "title", "start" y "url" son campos requeridos
                "start"           => $start[$i], //the plugin so assigned each corresponding value | por el plugin asi que asignamos a cada uno el valor correspondiente
                "end"             => $end[$i],
                "allDay"          => $allDay[$i],
                "backgroundColor" => $background[$i],
                "faculty_name"    => $faculty_name[$i],
                "course_name"     => $course_name[$i],
                "hall_name"       => $hall_name[$i],
                "id"              => $id[$i]
                //"url"=>"cargaEventos".$id[$i]
                //in the "url" field we append the URL with the ID of the event and then | en el campo "url" concatenamos el el URL con el id del timetable para luego
                //onclick event in JS refer to this and use the show method | en el timetable onclick de JS hacer referencia a este y usar el método show
                //to show the full details of an event | para mostrar los datos completos de un timetable
            );
        }

        json_encode($data); //become the main array $ data to an object Json | convertimos el array principal $data a un objeto Json
        return $data; //then I return it and get ready to consume | para luego retornarlo y estar listo para consumirlo
    }

    public function create()
    {
        //Values ​​received via ajax | Valores recibidos via ajax
        $title = $_POST['title'];
        $start = $_POST['start'];
        $back = $_POST['background'];
        $type = $_POST['type'];

        //Inserting event database | Insertando timetable a base de datos
        $timetable = new Timetable;
        $timetable->start = $start;
        //$timetable->end=$end;
        $timetable->type = $type;
        $timetable->allDay = true;
        $timetable->color = $back;
        $timetable->title = $title;

        $timetable->save();
    }

    public function update()
    {
        //Values ​​received via ajax | Valores recibidos via ajax
        $id = $_POST['id'];
        $title = $_POST['title'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $allDay = $_POST['allday'];
        $back = $_POST['background'];

        $timetable = Timetable::find($id);
        if ( $end == 'NULL' )
        {
            $timetable->end = NULL;
        } else
        {
            $timetable->end = $end;
        }
        $timetable->start = $start;
        $timetable->allDay = $allDay;
        $timetable->color = $back;
        $timetable->title = $title;
        //$timetable->end=$end;

        $timetable->save();
    }

    public function delete()
    {
        //Values ​​received via ajax | Valor id recibidos via ajax
        $id = $_POST['id'];

        Timetable::destroy($id);
    }

    public function holidayCalendar()
    {
        $data = array(); //We declare a major array that will contain the data | declaramos un array principal que va contener los datos
        $id = Timetable::all()->where('type', 'holiday')->lists('id');
        $title = Timetable::all()->lists('title'); //the same for the place and date | lo mismo para lugar y fecha
        $start = Timetable::all()->lists('start');
        $end = Timetable::all()->lists('end');
        $allDay = Timetable::all()->lists('allDay');
        $faculty_id = Timetable::all()->lists('faculty_id');
        $background = Timetable::all()->lists('color');
        $count = count($id); //we ids obtained to know the exact number of events | contamos los ids obtenidos para saber el numero exacto de timetables

        // We nesting cycle values ​​obtained our main array $ data |  hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data
        for ($i = 0; $i < $count; $i++)
        {
            $data[$i] = array(
                "title"           => $title[$i], //mandatory "title", "start" and "url" fields are required | obligatoriamente "title", "start" y "url" son campos requeridos
                "start"           => $start[$i], //the plugin so assigned each corresponding value | por el plugin asi que asignamos a cada uno el valor correspondiente
                "end"             => $end[$i],
                "allDay"          => $allDay[$i],
                "backgroundColor" => $background[$i],
                "faculty_id"      => $faculty_id[$i],
                "id"              => $id[$i]
                //"url"=>"cargaEventos".$id[$i]
                //in the "url" field we append the URL with the ID of the event and then | en el campo "url" concatenamos el el URL con el id del timetable para luego
                //onclick event in JS refer to this and use the show method | en el timetable onclick de JS hacer referencia a este y usar el método show
                //to show the full details of an event | para mostrar los datos completos de un timetable
            );
        }

        json_encode($data); //become the main array $ data to an object Json | convertimos el array principal $data a un objeto Json
        return $data;


    }

    public function timetable()
    {
        $data = array(); //We declare a major array that will contain the data | declaramos un array principal que va contener los datos
        $id = Timetable::all()->where('type', 'lecture')->lists('id');
        $title = Timetable::all()->lists('title'); //the same for the place and date | lo mismo para lugar y fecha
        $start = Timetable::all()->lists('start');
        $end = Timetable::all()->lists('end');
        $allDay = Timetable::all()->lists('allDay');
        $faculty_name = Timetable::all()->lists('faculty_name');
        $course_name = Timetable::all()->lists('course_name');
        $hall_name = Timetable::all()->lists('hall_name');
        $background = Timetable::all()->lists('color');
        $count = count($id); //we ids obtained to know the exact number of events | contamos los ids obtenidos para saber el numero exacto de timetables

        // We nesting cycle values ​​obtained our main array $ data |  hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data
        for ($i = 0; $i < $count; $i++)
        {
            $data[$i] = array(
                "title"           => $title[$i], //mandatory "title", "start" and "url" fields are required | obligatoriamente "title", "start" y "url" son campos requeridos
                "start"           => $start[$i], //the plugin so assigned each corresponding value | por el plugin asi que asignamos a cada uno el valor correspondiente
                "end"             => $end[$i],
                "allDay"          => $allDay[$i],
                "backgroundColor" => $background[$i],
                "faculty_name"    => $faculty_name[$i],
                "course_name"     => $course_name[$i],
                "hall_name"       => $hall_name[$i],
                "id"              => $id[$i]
                //"url"=>"cargaEventos".$id[$i]
                //in the "url" field we append the URL with the ID of the event and then | en el campo "url" concatenamos el el URL con el id del timetable para luego
                //onclick event in JS refer to this and use the show method | en el timetable onclick de JS hacer referencia a este y usar el método show
                //to show the full details of an event | para mostrar los datos completos de un timetable
            );
        }

        json_encode($data); //become the main array $ data to an object Json | convertimos el array principal $data a un objeto Json
        return $data;

    }

    public function holiday()
    {
        return view('timetable.manage_holidays');
    }

}
