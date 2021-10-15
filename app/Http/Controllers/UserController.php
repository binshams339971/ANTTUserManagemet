<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Session;
use App\Models\UserModel;
use App\Models\UserInformation;
use App\Models\OrderModel;
use DB;

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
        $email = session('email');
    	$totalOrder = OrderModel::where('email', $email)->get();
        $pendingOrder = OrderModel::where([
            'email' => $email,
            'status' => "pending"
        ])->get();
        $pendingAmount = 0;
        for ($x = 0; $x < count($pendingOrder); $x++) {
            $pendingAmount = $pendingAmount + $pendingOrder[$x]->price;
        }

        $paidOrder = OrderModel::where([
            'email' => $email,
            'status' => "paid"
        ])->get();
        $paidAmount = 0;
        for ($x = 0; $x < count($paidOrder); $x++) {
            $paidAmount = $paidAmount + $paidOrder[$x]->price;
        }
        return view('user.newdashboard')->with('orders', $totalOrder)
                                    ->with('paid', $paidOrder)
                                    ->with('paidAmount', $paidAmount)
                                    ->with('pendings', $pendingOrder)
                                    ->with('pendingAmount', $pendingAmount);
    }

    public function allorder()
    {
        $email = session('email');
    	$order = OrderModel::where('email', $email)->orderBy('id', 'desc')->get();
        return view('user.allorder')->with('orders', $order);
    }

    public function paymentHistory()
    {
        $email = session('email');
    	$payment = DB::table('payments')->where('email', $email)->orderBy('id', 'desc')->get();
        return view('user.paymentHistory')->with('payments', $payment);
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
            'name'=>'required|min:3|max:60',
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|digits:11',
            'school'=>'required|min:3|max:60',
            'class'=>'required|min:1|max:12',
            'address'=>'required|min:3|max:256',
            'city'=>'required|min:3|max:36',
            'country'=>'required|min:3|max:36',
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

    public function changePasswordForm(){
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
        $request->session()->forget('email');
        $request->session()->forget('name');
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
            'studentname'=>'required|min:3|max:60',
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|digits:11',
            'school'=>'required|min:3|max:60',
            'class'=>'required|min:1|max:36',
            'address'=>'required|min:3|max:256',
            'city'=>'required|min:3|max:36',
            'country'=>'required|min:3|max:36',
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

    //Social Login Starts Here
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleLogin(Request $request)
    {
        try{
            $googleUser = Socialite::driver('google')->stateless()->user();
            $this->_registerorLoginUser($googleUser, $request);
            if(!Session::has('emailFound')){
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('login');
        }
        }catch(\Exception $e){
            return redirect()->route('login');
        }       
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function facebookLogin(Request $request)
    {
        try{
            $facebookUser = Socialite::driver('facebook')->stateless()->user();
            if(!$facebookUser->email){
                $request->session()->put('emailNotFound', "Email not found");
                return redirect()->route('login');
            }else{
                $this->_registerorLoginUser($facebookUser, $request);
            }
            if(!Session::has('emailFound')){
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('login');
            }
        }catch(\Exception $e){
            return redirect()->route('login');
        }
       
    }


    protected function _registerorLoginUser($data, $request)
    {
    	$user = UserModel::where('socialid', $data->id)->first();
    	if(!$user){
            $emailCheck = UserModel::where('email', $data->email)->first();
            if(!$emailCheck){
                $user = new UserModel();
                $user->name = $data->name;
                $user->email = $data->email;
                $user->socialid = $data->id;
                $user->save();
                $request->session()->put('email', $user->email);
                $request->session()->put('name', $user->name);
                $request->session()->put('sociallogin', $user->socialid);
            }else{
                $request->session()->put('emailFound', "Email Found");
            }	
    	}else{
            $request->session()->put('email', $user->email);
            $request->session()->put('name', $user->name);
            $request->session()->put('sociallogin', $user->socialid);
        }
        
    }

    //Social Login Ends Here

}
