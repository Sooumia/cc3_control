<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
 
class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    } 

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $credentials['email'])->first();

        // if ($admin && password_verify($credentials['password'], $admin->password)) {
        if ($admin && $credentials['password'] = $admin->password) {
           
            return redirect()->route('dashbordlivre.index');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
        }
    }
}