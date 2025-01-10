<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assesment extends Model
{
    protected $guarded = ['id'];

    public function data(){
        return $this->hasMany(AssesmentData::class);
    }
}
