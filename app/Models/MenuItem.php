<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuItem extends Model
{
    use HasFactory;use SoftDeletes;
    protected $fillable = ['menu_category_id', 'name', 'desc', 'price', 'image', 'order_no', 'status'];

    public function menuCategory()
    {
        return $this->belongsTo('App\Models\MenuCategory', 'menu_category_id', 'id');
    }
}
