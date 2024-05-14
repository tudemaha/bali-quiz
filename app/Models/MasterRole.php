<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MasterRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];

    public $timestamps = false;

    /**
     * Get users that has specific role.
     */
    public function users(): HasMany {
        return $this->hasMany(User::class);
    }
}
