<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryItems extends Model
{
    use HasFactory;
    protected $fillable = ['docTitle','docImage','docAuthor','docDescription','docFile'];
}
