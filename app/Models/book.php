<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class book extends Model
{
    use HasFactory;

    public function bookshelf(): BelongsTo
    {
        return $this->belongsTo(Bookshelf::class);
    }
}
