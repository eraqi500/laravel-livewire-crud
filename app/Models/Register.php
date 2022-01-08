<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class
Register extends Model
{
    protected $fillable = ['name' , 'email'];
    protected $table = 'registers';
    use HasFactory;
}
