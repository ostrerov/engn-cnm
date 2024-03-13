<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    public $dateFormat = 'U';

    protected array $dates = [
        'created_at', 'updated_at',
    ];

    protected $fillable = [
        'name',
        'tax_id',
        'operator_id'
    ];
}
