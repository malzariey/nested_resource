<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserItem extends Model
{
    protected $fillable = ["user_id", "name"];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
