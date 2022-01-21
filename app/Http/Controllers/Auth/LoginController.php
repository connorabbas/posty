<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('login');
    }

    public function do_login(Request $request)
    {        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return back()->with('invalid_login', 'Invalid Login Details...');
        }

        return redirect()->route('dashboard');
    }
}
