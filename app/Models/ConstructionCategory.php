<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructionCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slung', 'description'];

    public function materials()
    {
        return $this->hasMany(ConstructionMaterial::class, 'construction_category_id');
    }

    public function subcategories()
    {
        return $this->hasMany(ConstructionSubcategory::class);
    }
}
