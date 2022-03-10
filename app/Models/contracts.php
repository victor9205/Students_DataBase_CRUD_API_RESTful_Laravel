<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contracts extends Model
{
    protected $table = 'contracts';

    protected $fillable =
    [
        'student_id', 'course', 'description', 'total_value',
        'installments_number', 'installments_expiration_date', 
        'fine', 'comp_interest', 'percent_interest', 'contract_expiration_date'
    ];
}
