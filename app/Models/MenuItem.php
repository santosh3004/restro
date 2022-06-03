<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $fillable = ['menu_category_id', 'name', 'desc', 'price', 'image', 'order_no', 'status'];
}
