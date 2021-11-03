<?php

namespace App\Http\Controllers;
use App\Events\UserCreatedEvent;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\createUsersRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('login', [    //sra mejin@ poxancuma frontin
            'date' => 2021,
            'status' => true,
        ]);
    }

    public function postLogin(Request $request)
    {
        $data = $request->only('email', 'password');
            if (Auth::attempt($data)){
                return  redirect()->route( 'dashboard');
            }else {
                return redirect()->back()->with('error', 'invalid email or password');
            }



    }

    public function getSignUp()
    {
        return view('sign-up');
    }

    public function postSignUp(createUsersRequest $request)
    {
//        $validated = $request->validate([
//            'name'=> 'required|min:3|max:64',
//            'email'=> 'required|email',
//            'password'=> 'required|min:4'
//        ]);
        $data = $request->validated();



        $user = User::create($data);
        event(new UserCreatedEvent($user));
        return redirect()->route('login')->with('success','dsdfsfsfs');
    }


public function getUsers()
    {
    $users = User::get();

    return view( 'users-list', [
        'users' => $users
    ]);

    }
}

