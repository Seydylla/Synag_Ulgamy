<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class lessons extends Model
{
    use HasFactory;
    protected $table = 'su_lessons';


    protected $fillable = ['id', 'title', 'created_at', 'updated_at'];
}
