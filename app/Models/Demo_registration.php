<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demo_registration extends Model
{
    use HasFactory;
    protected $table = "demo_registration";
    protected $primaryKey = "user_id";
}
