<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Blog extends Model implements Viewable
{
    use HasFactory;use SoftDeletes;use InteractsWithViews;
    protected $fillable = ['title', 'slug', 'image', 'content', 'blog_category_id', 'status'];


    public function blog_category()
    {
        return $this->belongsTo('App\Models\BlogCategory','blog_category_id','id');
    }

    public function blog_comments()
    {
        return $this->hasMany('App\Models\BlogComment','blog_id','id');
    }
}
