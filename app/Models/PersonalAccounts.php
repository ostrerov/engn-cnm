<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalAccounts extends Model
{
    public $dateFormat = 'U';

    protected array $dates = [
        'created_at', 'updated_at',
    ];

    protected $fillable = [
        'user_id',
        'operator_id',
        'number',
    ];
}
