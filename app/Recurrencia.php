<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurrencia extends Model
{
    protected $fillable =[
    	'tipo',
        'limite',
    ];
}
