<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table = "students";

    protected $fillable = ['student_id', 'course_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }

    public function timetable()
    {
        return $this->hasMany('App\Timetable');
    }

}
