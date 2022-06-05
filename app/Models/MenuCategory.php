<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MenuCategory extends Model
{
    use HasFactory;use SoftDeletes;

    protected $fillable = ['title', 'slug', 'image', 'order_no', 'status'];

    public function menu()
    {
        return $this->hasMany('App\Models\MenuItem', 'menu_category_id', 'id');
    }
}
