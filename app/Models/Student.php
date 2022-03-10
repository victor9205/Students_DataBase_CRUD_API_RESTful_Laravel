<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable =
    [
        'name', 'course', 'contrato', 'gender', 'RG', 'CPF', 
        'b_date', 'shift', 'fathers_name', 'mothers_name', 
        'tel', 'cel', 'CEP', 'adress', 'adress_comp'
    ];
}
