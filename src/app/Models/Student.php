<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = ['id'];

    public function ortu()
    {
        return $this->belongsTo(Ortu::class); # Tambahan relasi belongsTo ke Ortu (Pertemuan 5)
    }
}
