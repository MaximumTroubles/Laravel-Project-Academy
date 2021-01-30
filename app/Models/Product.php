<?php

namespace App\Models;

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
}
