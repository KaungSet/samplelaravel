<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    protected $table = 'retailers';
    protected $fillable = ['name', 'phone', 'created_by'];
    use HasFactory;
}
