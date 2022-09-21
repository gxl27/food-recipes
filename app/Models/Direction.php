<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'position',
        'recipe_id'
    ];

    public $timestamps = false;

        // Relationship To Recipe
        public function recipe() {
            return $this->belongsTo(Recipe::class, 'recipe_id');
        }

}
