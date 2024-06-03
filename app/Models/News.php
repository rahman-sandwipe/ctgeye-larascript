<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['headline', 'report', 'thumbnail', 'caption', 'intro', 'content', 's_category', 'status', 'cat_id', 'subcat_id', 'user_id', 'meta_tags', 'meta_desc','video_link'];
    public function category() {
        return $this->belongsTo(Category::class, 'cat_id');
    }
    public function subcategory() {
        return $this->belongsTo(Subcategory::class, 'subcat_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
