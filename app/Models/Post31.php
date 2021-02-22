<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post31 extends Model
{
    use HasFactory;

    protected $table = "post31s";

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
