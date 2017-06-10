<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function incidents()
    {
        return $this->hasMany('App\Incident');
    }
}
