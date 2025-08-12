<?php

namespace App\Models\Incidence;

use Illuminate\Database\Eloquent\Model;

class incidences extends Model
{
    protected $table = 'incidences';

    protected $fillable = [
        'employees_id',
        'departaments_id',
        'charges_id',
        'creation_date',
        'type',
        'reasson',
        'penalty',
        'mediation',
        'generated_by',
        'status',
        'bosses_id',
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

    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }
}
