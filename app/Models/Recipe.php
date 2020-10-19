<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['nama'];

    public function tags()
    {
        return $this->hasMany('App\Tags');
    }
}
