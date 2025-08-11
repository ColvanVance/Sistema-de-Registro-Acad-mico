<?php

namespace App\Models\Attendance_registration;

use Illuminate\Database\Eloquent\Model;

class Attendance_registration extends Model
{
    protected $table = 'attendance_registrations';

    protected $fillable = [
        'creation_date',
        'time_in',
        'time_exit',
        'hours_worked',
        'overtime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function charges()
    {
        return $this->hasMany(Charge::class);
    }
}
