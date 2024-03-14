<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'Fname',
        'Mname',
        'Lname',
        'Gender',
        'AcRank',
        'Role',
        'Phone',
        'Email',
        'Profile',
    ];
}

