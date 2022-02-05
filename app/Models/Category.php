<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name_category', 'slug' , 'images'];

    public function setNameCategoryAttribute($value)
    {
        $this->attributes['name_category'] = $value;
        $this->attributes['slug'] = $this->uniqueSlug($value);
    }

    private function uniqueSlug($value)
    {
        $slug = Str::slug($value);
        $count = Category::where('slug', $slug)->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
