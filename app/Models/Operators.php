<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operators extends Model
{
    use HasFactory;

    public $dateFormat = 'U';

    protected array $dates = [
        'created_at', 'updated_at',
    ];

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];
}
