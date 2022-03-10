<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gifted_students extends Model
{
    protected $table = 'gifted_students';

    protected $fillable =
    [
        'name', 'course', 'contract', 'gender', 'RG', 'CPF', 
        'b_date', 'shift', 'fathers_name', 'mothers_name', 
        'tel', 'cel', 'CEP', 'adress', 'adress_comp', 'expertice', 
        'Test_level_result'
    ];
}
