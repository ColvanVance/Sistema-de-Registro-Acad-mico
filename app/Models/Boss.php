<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    protected $table = 'bosses';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'department_id',
    ];

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    public function departments()
    {
        return $this->hasMany(Departament::class);
    }

}
