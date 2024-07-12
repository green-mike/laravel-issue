<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'end_at',
    ];

    protected function endAt(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->asDateTime($value),
            set: function ($value) {
                return (date('Y-m-d 23:59:59', strtotime($value)) ?? null);
            },
        );
    }
}
