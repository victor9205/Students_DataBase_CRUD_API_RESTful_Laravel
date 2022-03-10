<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exams extends Model
{
    protected $table = 'exams';

    protected $fillable =
    [
        'course', 'subjects', 'type', 'dificult_lvl',
        'applicator', 'applicators_name', 'application_date'
    ];
}
