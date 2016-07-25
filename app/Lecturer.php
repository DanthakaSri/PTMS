<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model {

	protected $table="lectures";

    protected $fillable=[];

    public function subject()
    {
        return $this->hasMany('App/Subject');
    }

    public function faculty()
    {
        return $this->belongsToMany('App/Faculty');
    }

}
