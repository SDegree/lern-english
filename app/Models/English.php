<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class English extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function indonesia()
    {
        return $this->belongsTo(Indonesia::class);
    }

    public function scopeLevel($query)
    {
        return $query->where('level', 'like', auth()->user()->unlock_level);
    }
}
