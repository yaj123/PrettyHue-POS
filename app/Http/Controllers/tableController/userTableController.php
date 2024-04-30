<?php

namespace App\Http\Controllers\tableController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class userTableController extends Controller
{
    public function show(Request $request): View
    {
 
        return view('tables.user');
    }

    public function store(Request $request): RedirectResponse {
        
        $data = $request -> validate([  
            'username' => ['required','string','unique:users'],
            'name'  => ['required','string'],
            'location'  => ['required','string'],
            'number' => 'required',
            'position'=> ['required','string'],
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'username' =>  $request->username,
            'location'  =>  $request->location,
            'number' =>  $request->number,
            'position'=>  $request->position,
            'password' =>  Hash::make($request->password),
        ];
        

        $user = User::create($data);


        return redirect(route('user.view', absolute: false)) -> with('success','User Added');
    }

    public function destroy(User $user){
        $user->delete();
        return to_route('user.view')->with('message', 'user delete!');
    }


}
