<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fresh extends Model
{
    use HasFactory;
    protected $table = 'freshman';
    public $timestamps = false;
    protected $fillable = [
        'fname',
        'lname',
        'sex',
        'status',
        'program',
        'department',
        'email',
        'phone',
        'approval',
        'cv',
    ];
}
