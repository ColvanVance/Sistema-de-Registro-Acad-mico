<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $table = 'absences';

    protected $fillable = [
        'employees_id',
        'Date_start',
        'Date_end',
        'Type',
        'Reasson',
        'Status',
        'employees_id',
        'attendance_registrations_id',
        'bosses_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }

    public function boss()
    {
        return $this->belongsTo(Boss::class);
    }

}
