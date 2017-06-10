<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name'
    ];

    public function incidents()
    {
        return $this->hasMany('App\Incident');
    }

    public function staffs()
    {
        return $this->hasMany('App\Staff');
    }
}
