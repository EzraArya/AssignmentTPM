<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'GameTitle',
        'Developer',
        'Publisher',
        'PublishDate',
        'Stock',
        'image',
        'genre_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
