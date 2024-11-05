<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multiple extends Model
{
    use HasFactory;

    protected $fillable = ['menus_id', 'description'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
