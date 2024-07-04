<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    // Other properties and methods

    /**
     * Get the blog that owns the detail.
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}