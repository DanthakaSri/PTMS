<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['course_id','name', 'faculty_id', 'lecturer_id'];


    public function faculty()
    {
        return $this->belongsTo('App/Faculty');
    }


    public function subject()
    {
        return $this->hasMany('App/Subject');
    }

    public function student()
    {
        return $this->hasMany('App/Student');
    }



}
