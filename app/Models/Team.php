<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Team extends Model
{
    use HasFactory;use SoftDeletes;
    protected $fillable = ['name', 'position','fb_link','ins_link','twi_link', 'image', 'order_no', 'status'];
}
