<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogPost extends Model
{
    use HasFactory;
    protected $fillable = ['postTitle','bodyText','thumbnailImg'];
}
