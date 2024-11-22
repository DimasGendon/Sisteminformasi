<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $table = 'submenus'; // Nama tabel di database

    protected $fillable = [
        'name',
        'photo',
        'description',
    ];
}
