<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name', 'title', 'description', 'type', 'date_start', 'date_end',
    ];
}
