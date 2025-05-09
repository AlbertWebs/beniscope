<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructionMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'price',
        'construction_category_id',
        'construction_subcategory_id',
    ];

    public function category()
    {
        return $this->belongsTo(ConstructionCategory::class, 'construction_category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(ConstructionSubcategory::class, 'construction_subcategory_id');
    }
}
