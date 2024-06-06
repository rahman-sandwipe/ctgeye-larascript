<?php

namespace App\Http\Controllers\Auth;

use App\Models\News;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        return redirect()->route(auth()->user()->type);
    }
    public function admin() {
        $user = User::latest()->get();
        $activeUser = User::where(['status'=>'active'])->latest()->get();
        $inactiveUser = User::where(['status'=>'inactive'])->latest()->get();

        $news = News::get();
        $publicNews = News::where(['status'=>'active'])->get();
        $hideNews = News::where(['status'=>'inactive'])->get();
        
        $Videos = Video::get();
        $publicVideos = Video::where(['status'=>'active'])->get();
        $hideVideos = Video::where(['status'=>'inactive'])->get();
        return view('backends.pages.dashboard', 
        compact(
            'user','activeUser','inactiveUser',
            'news','publicNews','hideNews',
            'Videos','publicVideos','hideVideos',
        ));
    }
    public function authors(){
        $authors=User::where('type','admin')->orderBy('name','ASC')->get();
        return view('backends.pages.users.authors', compact('authors'));
    }
    public function teams(){
        $teams=User::Where('type','team')->orderBy('name','ASC')->get();
        return view('backends.pages.users.teams', compact('teams'));
    }
    public function teachers(){
        $teachers=User::where('type','teacher')->orderBy('name','ASC')->get();
        return view('backends.pages.users.teachers', compact('teachers'));
    }
    public function users(){
        $users=User::where('type','user')->orderBy('name','ASC')->get();
        return view('backends.pages.users.users', compact('users'));
    }
    public function usersList(){
        $usersList=User::latest()->get();
        return view('backends.pages.users.users-list', compact('usersList'));
    }
}
