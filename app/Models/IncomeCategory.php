<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomeCategory extends Model
{
    protected $primaryKey =  'incate_id';

    protected $fillable = [
        'incate_name',
        'incate_remarks',
        'incate_creator',
        'incate_slug',
        
    ];
}
