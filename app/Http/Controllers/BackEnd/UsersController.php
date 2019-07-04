<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends BackEndController
{
    //


    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request){
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('users.index');
    }


    public function update($id,Request $request){
        $row = User::findOrFail($id);

        $requestArray = [
            'name'=>$request->input('name'),
            'email'=>$request->input('email')
        ];

        if($request->has('password')&& $request->input('password') !=''){
            $requestArray = $requestArray + ['password'=>Hash::make($request->input('password'))];

        }

       $row->update($requestArray);
        return redirect()->route('users.index');
    }
}
