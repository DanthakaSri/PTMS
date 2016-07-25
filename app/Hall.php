<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model {

	protected $fillable=['faculty_id','name','capacity','type'];

    public function faculty()
    {
        return $this->belongsTo('App/Faculty');
    }

}
