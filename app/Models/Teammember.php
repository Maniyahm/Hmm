<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teammember extends Model
{
    protected $table = 'teammembers';

    protected $fillable = [
        'name',
        'image',
        'position',
        'description'
    ];
}
