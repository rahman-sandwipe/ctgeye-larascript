<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Intervention\Image\Drivers\Gd\Driver;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('backends.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'username'  => ['required', 'string', 'max:55', 'unique:'.User::class],
            'phone'     => ['required', 'string', 'unique:'.User::class],
            'password'  => ['required', 'confirmed', Rules\Password::min(5)],
        ]);
        $data=array();
        if($request->hasFile('photo')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('photo')->getClientOriginalExtension();
            $img = $manager->read($request->file('photo'));
            $img = $img->resize(100, 100);
            $img->toJpeg(80)->save(base_path('public/uploads/users/'.$name_gen));
            $save_url = 'uploads/users/'.$name_gen;
            $data['photo']=$save_url;
        } // endif ==========
        $data=$request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        
        event(new Registered($data));
        
        $notification=array(
            'messege'=>'Successfully Added',
            'alert-type'=>'success'
        );
        return redirect(route('usersList'))->with($notification);
    }
}
