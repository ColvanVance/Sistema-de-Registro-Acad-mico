<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $table = 'departaments';

    protected $fillable = [
        'name_departament',
        'location',
        'description',
        'responsible_employee',
        'state',
        'capacity_staff',
        'employees_id',
        'bosses_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function boss()
    {
        return $this->belongsTo(Boss::class);
    }

    public function charge()
    {
        return $this->belongsTo(charge::class);
    }

    public function horary()
    {
        return $this->belongsTo(Horary::class);
    }

}
