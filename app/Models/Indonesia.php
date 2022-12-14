<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indonesia extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function english()
    {
        return $this->belongsTo(English::class);
    }

    public function scopeLevel($query)
    {
        return $query->where('level', 'like', auth()->user()->unlock_level);
    }
}
