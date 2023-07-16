<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index (User $users) 
    {
        return view('dashboard.users.index' , [
            'users' => User::all()
        ]);
    }
    public function edit ()
    {
        return view ('dashboard.users.edit_akun');
    }

    public function update(Request $request, User $user)
    {
        if (Hash::check($request->password,auth()->user()->password) && $request->email == auth()->user()->email) {
            $rules = ['name' => 'required|max:255'];
            if($request->username != auth()->user()->username) {
                $rules['username'] = ['required','min:3','max:255','unique:users'];
            }
            $validatedData = $request->validate($rules);

            User::where('id', auth()->user()->id)->update($validatedData);

            return redirect('/')->with('success', 'Account Has Been Updated!');
            
        }
        else {
            session()->flash('failed', 'Akun Anda Gagal Diubah');
            return redirect('/users/edit_akun');
        }

    }
}
