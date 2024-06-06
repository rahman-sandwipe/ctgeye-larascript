<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['headline','report','thumbnail','caption','intro','video_type','embed_code','status','user_id','meta_tags','meta_desc','news_link'];
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
