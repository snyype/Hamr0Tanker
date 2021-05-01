<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanker extends Model
{
    use HasFactory;
    protected $fillable = ['name','desc','price','capacity','image'];
    protected $guarded=['role_id'];
}