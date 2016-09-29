<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model {

	protected $table="lecturers";

    protected $fillable=['lecturer_id','first_name','last_name','faculty_id','type'];

    public function subject()
    {
        return $this->hasMany('\App\Subject');
    }

    public function faculty()
    {
        return $this->belongsTo('\App\Faculty');
    }

}
