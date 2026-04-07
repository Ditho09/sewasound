<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    use HasFactory;

    protected $table = 'sounds'; // Nama tabel di database
    protected $fillable = ['name', 'location', 'price']; // Field yang bisa diisi
}