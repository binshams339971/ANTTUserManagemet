<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;
use App\Models\UserInformation;
use App\Models\OrderModel;

class UserController extends Controller
{
    public function registerForm()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:16' ,
            'email'=>'required|email|unique:user_models',
            'password'=>'required|min:4|max:12',
        ]);
        
        $user = new UserModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $request->session()->put('register', "register");
        return redirect()->route('register');
        
        
    }
   
    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:12',
        ]);

        $user = UserModel::where('email', $request->email)->get();
        if(count($user) > 0){
            if (Hash::check($request->password, $user[0]->password)) {
                $request->session()->put('email', $user[0]->email);
                $request->session()->put('name', $user[0]->name);
                return redirect()->route('login');
            } 
            $request->session()->put('login0', "0");
            return redirect()->route('login');    
        }else{
            $request->session()->put('login00', "00");
            return redirect()->route('login'); 
        }
        
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function allorder()
    {
        $email = session('email');
    	$order = OrderModel::where('email', $email)->get();
        return view('user.allorder')->with('orders', $order);
    }

    public function  profileForm()
    {
        $email = session('email');
    	$profile = UserInformation::where('email', $email)->get();
        if( count($profile) > 0){
            return view('user.profile')->with('user', $profile);
        }
        else{
            return view('user.profile2');
        }
    	
       
    }

    public function  profileUpdate(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:16',
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:11',
            'school'=>'required|min:3|max:36',
            'class'=>'required|min:3|max:12',
            'address'=>'required|min:3|max:36',
            'city'=>'required|min:3|max:12',
            'country'=>'required|min:3|max:16',
            'postcode'=>'integer',
        ]);
        
        $email = session('email');
    	$profile = UserInformation::where('email', $email)->get();
        if( count($profile) > 0){
            $user = UserInformation::find($profile[0]->id);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->school = $request->school;
            $user->class = $request->class;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->country = $request->country;
            $user->postcode = $request->postcode;
            $user->save();

            $user1 = UserModel::where('email', $email)->get();
            $user2 = UserModel::find($user1[0]->id);
            $user2->name = $request->name;
            $user2->save();
            $request->session()->forget('name');
            $request->session()->put('name', $request->name);
            $request->session()->put('success', "1");
            
            return redirect()->route('user.profile');
        }
        else{
            $user = new UserInformation();
            $user->name = $request->name;
            $user->email = $email;
            $user->phone = $request->phone;
            $user->school = $request->school;
            $user->class = $request->class;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->country = $request->country;
            $user->postcode = $request->postcode;
            $user->save();

            $user1 = UserModel::where('email', $email)->get();
            $user2 = UserModel::find($user1[0]->id);
            $user2->name = $request->name;
            $user2->save();

            $request->session()->forget('name');
            $request->session()->put('name', $request->name);
            $request->session()->put('success', "1");

            return redirect()->route('user.profile');
        }       
    }

    public function changePasswordForm(Request $request){
        return view('user.changepassword');
    }
    public function changePassword(Request $request){
        $this->validate($request, [
            'current_Password'     => 'required|min:4|max:12',
            'new_Password'     => 'required|min:4|max:12',
            'confirm_Password' => 'required|same:new_Password',
        ],[
            'current_Password.required' => 'Current Password is required',
            'current_Password.min' => 'Current Password needs to have at least 4 characters',
            'new_Password.required' => 'New Password is required',
            'new_Password.min' => 'New Password needs to have at least 4 characters',
            'confirm_Password.required' => 'Confirm Password is required',
            'confirm_Password.same' => 'New Password and Confirm Password do not match'
        ]);

        $email = session('email');
    	$user = UserModel::where('email', $email)->get();

        if(Hash::check($request->current_Password, $user[0]->password))
        {
            if(!Hash::check($request->new_Password, $user[0]->password))
            {
                $obj_user = UserModel::find($user[0]->id);
                $obj_user->password = Hash::make($request->new_Password);
                $obj_user->save();
                $request->session()->put('change-success', "1");
                return view('user.changepassword');
            }
            else
            {
                $request->session()->put('change-fail2', "0");
                return view('user.changepassword');
            }
        }
        else
        {
            $request->session()->put('change-fail', "0");
            return view('user.changepassword');
        }
    
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('home');
    }

    public function orderForm(Request $request){
        $name = $request->get('name');
        $category = $request->get('category');
        $price = $request->get('price');
        $image = $request->get('image');
        

        $email = session('email');
        $profile = UserInformation::where('email', $email)->get();
        if( count($profile) > 0){
            return view('user.orderform')->with('name', $name)
                                    ->with('category', $category)
                                    ->with('price', $price)
                                    ->with('image', $image)
                                    ->with('user', $profile);
        }
        else{
           return view('user.orderform2')->with('name', $name)
                                    ->with('category', $category)
                                    ->with('price', $price)
                                    ->with('image', $image);
        }
        
    }

    public function orderPlace(Request $request){
        $request->validate([
            'studentname'=>'required|min:3|max:16',
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:11',
            'school'=>'required|min:3|max:36',
            'class'=>'required|min:3|max:12',
            'address'=>'required|min:3|max:36',
            'city'=>'required|min:3|max:12',
            'country'=>'required|min:3|max:16',
        ]);

        $order = new OrderModel();
        $order->name = $request->name;
        $order->category = $request->category;
        $order->price = $request->price; 
        $order->studentname = $request->studentname;
        $order->email = session('email');
        $order->phone = $request->phone;
        $order->school = $request->school;
        $order->class = $request->class;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->country = $request->country;
        $order->postcode = $request->postcode;
        $order->status = "Pending";
        $order->save();

        return redirect()->route('allorder');

        
    }

}
