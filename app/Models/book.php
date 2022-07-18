<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    
    protected $fillable = ['Book_title','Author','Release_date','Price'];
    protected $casts = ['date'=>'Release_date','integer'=>'Price'];
}
