<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Numbers extends Model
{
    public $dateFormat = 'U';

    protected array $dates = [
        'created_at', 'updated_at',
    ];

    protected $fillable = [
        'number',
        'owner',
        'operator_id',
        'disabled',
        'tariff_id',
        'personal_account_id',
    ];
}
