<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majalah extends Model
{
    use HasFactory;
    protected $table = 'majalah';
    protected $fillable = ['judul', 'tema', 'launching-date', 'foto'];
    public $timestamps = false;
}