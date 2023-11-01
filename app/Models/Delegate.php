<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegate extends Model
{
    use HasFactory;
    protected $table = 'delegates';
    protected $fillable = [
        'workflow',
        'from_date',
        'to_date',
        'delegate',

    ];
}
