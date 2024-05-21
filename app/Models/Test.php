<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'score',
        'answered',
    ];

    protected $attributes = [
        'score' => 0,
        'answered' => 0,
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function test_details(): HasMany {
        return $this->hasMany(TestDetail::class);
    }
}
