<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['id', 'name', 'surname', 'email', 'page', 'created_at', 'updated_at'];
}
