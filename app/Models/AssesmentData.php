<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssesmentData extends Model
{
    protected $guarded = ['id'];

    public function assessment(){
        return $this->belongsTo(Assesment::class);
    }

    public function media(){
        return $this->hasMany(AssesmentMedia::class);
    }
}
