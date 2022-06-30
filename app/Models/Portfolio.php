<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name', 'category', 'description', 'content', 'date', 'author', 'image_id',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }
}
