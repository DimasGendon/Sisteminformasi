<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multiple extends Model
{
    use HasFactory;

    protected $fillable = ['menus_id', 'description'];

    public function menus()
    {
        return $this->belongsTo(Menu::class, 'menus_id'); // Adjust the foreign key if necessary
    }
}
