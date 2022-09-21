<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'logo',
        'calories',
        'duration',
        'category_id'
    ];


    // Relationship To Category
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function ingredients(){
        return $this->hasMany(Ingredient::class)->orderBy('position');
     }

    public function directions(){
        return $this->hasMany(Direction::class)->orderBy('position');
    }

}
