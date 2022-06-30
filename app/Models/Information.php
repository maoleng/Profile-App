<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Information extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'word_run', 'about_me', 'name', 'title', 'description', 'cv_link', 'avatar_id',
    ];

    public function avatar(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'avatar_id', 'id');
    }
}
