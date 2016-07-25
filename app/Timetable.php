<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{

    protected $table = "timetables";
    protected $fillable = ['faculty_id', 'course_id'];

    public function faculty()
    {
        return $this->belongsTo('App/Faculty');
    }

    public function student()
    {
        return $this->belongsToMany('App/Student');
    }

    public function course()
    {
        return $this->belongsTo('App/Course');
    }
}
