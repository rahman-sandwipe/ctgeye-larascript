<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('backends.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile Name.
     */
    public function nameUpdate(Request $request) {
        $userDetails = Auth::user();  // To get the logged-in user details
        $user = User::find($userDetails ->id);  // Find the user using model and hold its reference
        $user->name=$request->input('name');
        $user->save();  // Update the data
        return redirect()->back()->with('success', 'User Name successfully updated.');
        // $notification = array(
        //     'message' => 'User Name successfully updated.',
        //     'alert-type' => 'success'
        // );
        // return redirect()->back()->with($notification);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
