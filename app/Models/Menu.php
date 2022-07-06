<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Menu extends Model
{
    use HasFactory;use SoftDeletes;use HasApiTokens;
    protected $fillable = ['title', 'link', 'order_no', 'status'];
}
