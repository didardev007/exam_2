<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function sellers(): HasMany
    {
        return $this->hasMany(Seller::class);
    }
}
