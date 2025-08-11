<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horary extends Model
{
    protected $table = 'horaries';

    protected $fillable = [
        'day',
        'time_in',
        'time_exit',
    ];

    public function departament ()
    {
        return $this->hasMany(Departament::class);
    }

}
