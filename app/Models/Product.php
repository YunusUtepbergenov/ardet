<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'image', 'category'];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
    ];

    public function getTranslated($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->$field[$locale] ?? $this->$field['ru'] ?? '';
    }
}
