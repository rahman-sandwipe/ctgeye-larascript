<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['name', 'slug', 'cat_id', 'photo', 'status', 'meta_tags', 'meta_desc','created_at'];
    public function category() {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
