<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'keyword',
        'description',
        'featuredimage',
        'blog',
        'created_at',
        'updated_at',
    ];
}
