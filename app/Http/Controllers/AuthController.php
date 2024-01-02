<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    // render form login
    public function login()
    {
        return view('auth.login');
    }

    //handle login user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in!');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // render form register
    public function register()
    {
        return view('auth.register');
    }

    // handle register user
    public function store(Request $request) {
        $formFields = $request->validate([
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        // Profile::create([ 'user_id' => $user->id ]);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    // handle logout
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Render Profile page
    public function profile(Request $request) {
        return view('auth.profile', [
            'user' => Auth::user(),
            'blogs' => Blog::latest()->where('status', true)->get()
        ]);
    }

    public function edit_profile() {
        $user = Auth::user();
        return view('auth.edit-profile', [ 'user' => $user ]);
    }

    public function save_profile(Request $request) {
        $user = Auth::user();
        $profile = (User::find($user->getAuthIdentifier()))->profile;
        $profile->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'address' => $request->address,
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'facebook_account' => $request->facebook_account,
            'instagram_account' => $request->instagram_account,
            'linkedin_account' => $request->linkedin_account,
        ]);

        return redirect('/profile')->with('message', 'The profile has been updated!');

    }
}
