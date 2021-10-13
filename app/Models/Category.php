<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    public function sub_cats()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }

    public function main_cat()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
