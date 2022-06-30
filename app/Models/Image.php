<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Image extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'type', 'source',
    ];

    public function avatar(): BelongsTo
    {
        return $this->belongsTo(Information::class, 'avatar_id', 'id');
    }

    public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class, 'image_id', 'id');
    }
}
