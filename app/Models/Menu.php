<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'description',];

    // Define the relationship with Multiple
    public function multiples()
    {
        return $this->hasMany(Multiple::class, 'menus_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'menus_id');
    }
}
