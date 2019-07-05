<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Users\StoreRequest;
use App\Http\Requests\BackEnd\Users\UpdateRequest;
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

    public function store(StoreRequest $request){

      $requestArray = $request->all();
      $requestArray['password']=Hash::make($requestArray['password']);
        User::create($requestArray);

        return redirect()->route('users.index');
    }


    public function update($id,UpdateRequest $request){
        $row = User::findOrFail($id);



        $requestArray = $request->all();

        if(isset($requestArray['password'])&& $requestArray['password'] !=''){
            $requestArray['password'] = Hash::make($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }


       $row->update($requestArray);
        return redirect()->route('users.index');
    }
}
