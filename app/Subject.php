<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $fillable = ['name', 'course_id', 'subject_id', 'hours'];

    public function course()
    {
        return $this->belongsTo('\App\Course');
    }


}
