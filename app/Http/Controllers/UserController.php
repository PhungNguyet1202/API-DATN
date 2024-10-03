<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    
    public function login(){
        return view('user.login'); 
    }

  
    public function register(){
        return view('user.register'); 
    }

    public function postregister(Request $req){
        $email = $req->input('email');
        $password =md5($req->input('password')) ;
        $repassword = md5( $req->input('repassword'));
        $name = $req->input('name');
        $phone = $req->input('phone');
        $address = $req->input('address');
  
        if($password!=$repassword){
           session()->put('message','Mật khẩu nhập lại không trùng khớp!');
           return back();
        }
  
        $user = Customer::where('email',$email)->first();
        if(isset($user)){
           session()->put('message','Email đã tồn tại! Không thể đăng ký');
           return back();
        }
  
        $user = new Customer();
        $user->name = $name;
        // $user->password = $password;
        $user->password = Hash::make($password);
        $user->email = $email;
        $user->phone = $phone;
        $user->address = $address;
        $user->save();
        return redirect()->route('login'); // dang ky thanh cong se chuy qua trang dang nhap
  
  
  
     }
     public function postlogin(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');
        // $remember= $req->input('remember');
  
        $user = Customer::where('email', $email)->first();
        $canLogin= false;
        if(isset($user)){
         $canLogin= Hash::check($password, $user->password);
        }
        if($canLogin){// cho phap dang nhap
           Auth::login($user);
           return redirect()->route('home');
        //    ,$remember
        }else{
           session()->put('message','Email hoặc mật khẩu không đúng!');
           return back();
        }
     }
}