<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'address_url', 'description', 'area_id', 'user_id'];

    public function user (): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
