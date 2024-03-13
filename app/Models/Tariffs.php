<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tariffs extends Model
{
    public $dateFormat = 'U';

    protected array $dates = [
        'created_at', 'updated_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'operator_id',
    ];
}
