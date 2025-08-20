<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horary extends Model
{
    protected $table = 'horaries';

    protected $fillable = [
        'expected_input',
        'expected_exit',
        'overtime',
        'employees_id',
        'departament_id',
    ];

    public function departament ()
    {
        return $this->hasMany(Departament::class);
    }

    public function bosses()
    {
        return $this->belongsTo(Boss::class);
    }

}
