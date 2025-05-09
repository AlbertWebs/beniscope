<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slung', 'meta', 'description', 'image'];

    // Automatically generate slug when setting the title
    public static function boot()
    {
        parent::boot();
        static::creating(function ($service) {
            $service->slung = Str::slug($service->title);
        });
    }
}
