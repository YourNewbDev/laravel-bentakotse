<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    //
    public $timestamps = false;

    protected $fillable = ['name', 'province_id'];

    public function province():BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
