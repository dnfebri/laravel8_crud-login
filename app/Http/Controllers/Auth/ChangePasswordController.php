<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.passwords.change');
    }

    public function update(Request $request)
    {
        request()->validate([
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:3', 'confirmed']
        ]);

        $currentpassword = auth()->user()->password;
        $old_password = request('old_password');

        if (Hash::check($old_password, $currentpassword)) {
            auth()->user()->update([
                // 'password' => Hash::make(request('password')),
                'password' => bcrypt(request('password')),
            ]);
            return redirect('/')->with('success', 'You are change your password');
        } else {
            return back()->withErrors(['old_password' => 'You have to fill your old password']);
        }

        // dd([
        //     Request()->old_password,
        //     Request()->password,
        //     Request()->password_confirmation,
        // ]);
    }
}
