<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'publisher_id',
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
