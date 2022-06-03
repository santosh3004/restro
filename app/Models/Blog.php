<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;use SoftDeletes;
    protected $fillable = ['title', 'slug', 'image', 'content', 'blog_category_id', 'status'];
}
