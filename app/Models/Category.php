<?php

namespace App\Models;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'name',
    ];

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
