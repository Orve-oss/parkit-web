<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
{
    $users = User::where('role', 'user')->get();
    return view('users.index', compact('users'));
}

    public function login()
    {
        return view('auth.login');
    }

    public function loginpage(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            if ($user->role == 'admin' || $user->role == 'super-admin') {
                return redirect()->intended('welcome');
            } else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'You do not have the necessary permissions to access this area.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function loginuser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            if ($user->role == 'user') {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Login successful',
                    'user' => $user,
                ]);
            } else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'You do not have the necessary permissions to access this area.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);

    return response()->json([
        'status' => 'success',
        'message' => 'Registration successful',
        'user' => $user,
    ]);
}
}
