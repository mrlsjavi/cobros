<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    protected $fillable =[
    	'recurrencia',
        'valor',
    ];

    public function recurrencia(){
        return $this->belongsTo(Recurrencia::class);
    }
}
