<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $table = 'teachers';

    protected $fillable =
    [
        'name', 'course', 'contract_id', 'position', 'academic_level', 'gender', 'RG', 'CPF', 
        'b_date', 'fathers_name', 'mothers_name', 'salary', 'tel', 
        'cel', 'CEP', 'adress', 'adress_comp', 'addmission_date'
    ];
}
