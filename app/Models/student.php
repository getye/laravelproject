<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
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
        'cv',
    ];
}
