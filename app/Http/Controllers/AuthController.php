<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
  public function user(){
    return view('auth.user');
  }
  public function createUser(){
    return view('auth.user-create');
  }
  public function userStore(Request $userStore){
    $this->validate($userStore,[
      'name'=>'required',
      'email'=>'required|email|unique:users',
      'password'=>'required|min:5'
    ]);
    $saveUser = new User();

    $saveUser->name=$userStore['name'];
    $saveUser->email=$userStore['email'];
    $saveUser->password=$userStore['password'];
   
    $save = $saveUser ->save();  
        if($saveUser){
          return redirect()->route('dashboard');
        }else{
          return back()->with(['save' => 'No message save']);    
          }  
}
public function userId(Request $userId){
   $this->validate($userId,[
    'email'=>'required',
    'password'=>'required'
   ]);
   $user = User::where([
    ['email',$userId['email']],
    ['password',$userId['password']]
    
   ])->first();
   if($user){
    Auth::login($user);
    return redirect()->route('dashboard');
   }
   if(Auth::attempt(['email'=>$userId['email'],'password'=>$userId['password']])){
    return redirect()->route('dashboard');
   }
}
}