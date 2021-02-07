<?php

namespace App\Models;

use App\Scopes\ProductScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    public function getImgAttribute($value)
    {
        return $value ? $value : '/img/product-img.jpg';
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id', 'id'); //? модель с которой надо установить связт, название столбца с внешним ключем, название столбца текущей модели, название столбца связанной модели
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    protected static function booted()
    {
        static::addGlobalScope(new ProductScope);
    }
    public function scopeRecomended($query)
    {
        $query->where('recomended', 1);
    }
    public function scopeLatest($query)
    {
        $query->orderByDesc('created_at');
    }

}
