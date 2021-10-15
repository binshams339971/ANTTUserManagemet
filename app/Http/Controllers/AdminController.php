<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminModel;
use App\Models\OrderModel;
use DB;

class AdminController extends Controller
{
    public function adminLoginForm()
    {
        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:4|max:12',
        ]);
        $admin = AdminModel::where('username', $request->username)->get();
        if(count($admin) > 0){
            if (Hash::check($request->password, $admin[0]->password)) {
                $request->session()->put('admin', $admin[0]->name);
                $request->session()->put('username', $admin[0]->username);
                return redirect()->route('admin.home'); 
            } 
            $request->session()->put('login0', "Password not macthed");
            return redirect()->route('admin.login');    
        }else{
            $request->session()->put('login00', "Username not found");
            return redirect()->route('admin.login'); 
        }       
    }

    public function adminHome()
    {
        $totalOrder = OrderModel::all();
        $pendingOrder = OrderModel::where([
            'status' => "pending"
        ])->get();
        $pendingAmount = 0;
        for ($x = 0; $x < count($pendingOrder); $x++) {
            $pendingAmount = $pendingAmount + $pendingOrder[$x]->price;
        }

        $paidOrder = OrderModel::where([
            'status' => "paid"
        ])->get();
        $paidAmount = 0;
        for ($x = 0; $x < count($paidOrder); $x++) {
            $paidAmount = $paidAmount + $paidOrder[$x]->price;
        }
        return view('admin.newdashboard')->with('orders', $totalOrder)
                                    ->with('paid', $paidOrder)
                                    ->with('paidAmount', $paidAmount)
                                    ->with('pendings', $pendingOrder)
                                    ->with('pendingAmount', $pendingAmount);
    }

    public function allOrders()
    {
        $order = OrderModel::all()->sortByDesc('id');
        return view('admin.allorder')->with('orders', $order);
    }

    public function payments()
    {
        $payment = DB::table('payments')->get()->sortByDesc('id');
        return view('admin.paymentHistory')->with('payments', $payment);
    }

    public function adminChangePasswordForm(){
        return view('admin.changepassword');
    }
    public function adminChangePassword(Request $request){
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

        $username = session('username');
    	$admin = AdminModel::where('username', $username)->get();

        if(Hash::check($request->current_Password, $admin[0]->password))
        {
            if(!Hash::check($request->new_Password, $admin[0]->password))
            {
                $obj_user = AdminModel::find($admin[0]->id);
                $obj_user->password = Hash::make($request->new_Password);
                $obj_user->save();
                $request->session()->put('change-success', "1");
                return view('admin.changepassword');
            }
            else
            {
                $request->session()->put('change-fail2', "0");
                return view('admin.changepassword');
            }
        }
        else
        {
            $request->session()->put('change-fail', "0");
            return view('admin.changepassword');
        }
    
    }

    public function addNewAdminForm(){
        return view('admin.newadmin');
    }

    public function addNewAdmin(Request $request){
        $request->validate([
            'name'=>'required',
            'username'=>'required|unique:admin_models',
            'password'=>'required|min:4|max:12',
        ]);
        $admin = new AdminModel();
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->password = Hash::make($request->password);
        $admin->save();
        $request->session()->put('newadmin', "1");
        return redirect()->route('admin.newadmin');
    }


    public function logout(Request $request){
        $request->session()->forget('admin');
        $request->session()->forget('username');
        return redirect()->route('admin.login');
    }
}
