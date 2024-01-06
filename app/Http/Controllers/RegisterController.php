<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function post(UserStoreRequest $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->address_1 = $request->input('address_1');
        $user->address_2 = $request->input('address_2');
        $user->city = $request->input('city');
        $user->state_province = $request->input('state_province');
        $user->zip_postal_code = $request->input('zip_postal_code');
        $user->password = sha1($request->input('password'));
        $user->save();

        return redirect()->route('success');
    }

    public function success() {
        return view('success');
    }
}
