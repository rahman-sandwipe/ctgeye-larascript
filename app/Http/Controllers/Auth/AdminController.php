<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        return redirect()->route(auth()->user()->type);
    }
    public function admin(){
        return view('backends.pages.dashboard');
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
