<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use HasFactory;use SoftDeletes;
    protected $fillable = ['title', 'slug', 'order_no', 'status'];

    public function category()
    {
        return $this->hasMany('App\Models\Blog','blog_category_id','id');
    }
}
