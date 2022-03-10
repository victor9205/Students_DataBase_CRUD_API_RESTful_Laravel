<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class debtors extends Model
{
    protected $table = 'debtors';

    protected $fillable =
    [
        'student_id', 'contract_id', 'description', 'value', 'fine',
        'comp_interest', 'percent_interest', 'discount_date', 'total_value',
        'expiration_date'
    ];
}
