<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class results extends Model
{
    protected $table = 'results';

    protected $fillable =
    [
        'student_id', 'student_name', 'course', 'subjects', 
        'type', 'dificult_lvl', 'applicator', 'applicators_name', 
        'application_date', 'result'
    ];
}
