<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesSections extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'note',
        'created_by',
    ];
}
