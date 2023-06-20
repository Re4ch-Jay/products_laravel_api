<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'rating',
        'imageUrl',
        'category_id'
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('price', 'like', '%' . request('search') . '%');
        }


        if ($filters['category'] ?? false) {
            $query->where('category_id', 'like', '%' . request('category') . '%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
