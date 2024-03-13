<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NumberHistory extends Model
{
    public $dateFormat = 'U';

    protected array $dates = [
        'created_at', 'updated_at',
    ];

    protected $fillable = [
        'number_id',
        'old_data',
        'new_data',
    ];
}
