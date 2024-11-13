<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = [
        'name', 'address', 'email', 'founded_year',
    ];

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
