<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateProfileInformationController extends Controller
{
    public function edit()
    {
        return view('edit.profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'notelpon' => 'required|min:10|max:15',
            'password' => 'required|min:5|max:20|confirmed',
        ]);

        auth()->user()->update([
            'notelpon' => $request->notelpon,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/home')->with('message', 'your password has been updated');
    }
}
