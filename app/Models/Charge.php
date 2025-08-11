<?php

namespace App\Models\Charge;

use Illuminate\Database\Eloquent\Model;

class charge extends Model
{
    protected $table = 'charges';

    protected $fillable = [
        'Name_charge',
        'Description',
        'State',
    ];

    public function departament()
    {
        return $this->hasMany(Departament::class);
    }

    public function attendance_registration()
    {
        return $this->hasMany(Attendance_registration::class);
    }
}
