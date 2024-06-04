<?php

namespace App\Http\Controllers\Frontends;

use App\Models\News;
use App\Models\Video;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home() : View {
        $getSpecials= News::with('category','subcategory','user')->where(['status'=>'active'])->first();
        $getLeads   = News::with('category','subcategory','user')->where(['status'=>'active'])->latest()->get();
        
        $getVideoLead= Video::with('category','subcategory','user')->where(['status'=>'active'])->first();
        $getVideos= Video::with('category','subcategory','user')->where(['status'=>'active'])->latest()->get();
        return view('frontends.pages.home', compact('getSpecials','getLeads','getVideoLead','getVideos'));
    }

    // //json data return 
    // public function GetCategory()
    // {
    //     $category=Category::where(['status'=>'active'])->latest()->get();
    //     return $category;
    // }
}
