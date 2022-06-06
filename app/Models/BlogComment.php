<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BlogComment extends Model
{
    use HasFactory;use SoftDeletes;
    protected $fillable = ['blog_id', 'name', 'email', 'comment', 'status'];

    public function blog()
    {
        return $this->belongsTo('App\Models\Blog','blog_id','id');
    }
}
