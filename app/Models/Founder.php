<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $primaryKey = 'id';
    protected $guarded = ['id'];
}
