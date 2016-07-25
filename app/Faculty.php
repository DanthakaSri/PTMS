<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{

    protected $fillable = ['name'];

    public function course()
    {
        return $this->hasMany('App/Course');
    }

    public function hall()
    {
        return $this->hasMany('App/Hall');
    }

}
