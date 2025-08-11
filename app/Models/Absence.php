<?php

namespace App\Models\Absences;

use App\Models\Boss\Boss;
use App\Models\Departament\Departament;
use App\Models\Employees\Employee;
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
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }

    public function boss()
    {
        return $this->belongsTo(Boss::class);
    }

}
