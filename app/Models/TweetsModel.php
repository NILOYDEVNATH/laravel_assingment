<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetsModel extends Model
{
    protected $table="tweets";
    protected $key="id";
    protected $fillable=['body'];
}
