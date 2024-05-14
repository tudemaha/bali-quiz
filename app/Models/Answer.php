<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Answer extends Model
{
    use HasFactory;

    public function question(): BelongsTo {
        return $this->belongsTo(Question::class);
    }

    public function test_details(): HasMany {
        return $this->hasMany(TestDetail::class);
    }
}
