<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    protected $table = 'blood_type';

    protected $fillable = ['name'];

}
