<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConstructionSubcategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slung', 'construction_category_id']; // Add more fields as needed

    public function category()
    {
        return $this->belongsTo(ConstructionCategory::class, 'construction_category_id');
    }
    public function materials()
    {
        return $this->hasMany(ConstructionMaterial::class, 'construction_subcategory_id');
    }
}
