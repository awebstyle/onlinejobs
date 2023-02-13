<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Category;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
     public function register(){
        $categories = Category::get();
        return view('front.register')->with('categories', $categories);
    }

    public function createAccount(Request $request){

        /* $fileNameWithExtension = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'-'.time().'.'.$extension; */

        $this->validate($request, ['email' => 'required|email|unique:clients']);

        $account = new Client();

        $account->firstname = $request->input('firstname');
        $account->lastname = $request->input('lastname');
        $account->middlename = $request->input('middlename');
        $account->address = $request->input('address');
        $account->gender = $request->input('gender');
        $account->dateofbirth = $request->input('dateofbirth');
        $account->birthplace = $request->input('birthplace');
        $account->phone = $request->input('phone');
        $account->civilstatus = $request->input('civilstatus');
        $account->email = $request->input('email');
        $account->username = $request->input('username');
        $account->password = bcrypt($request->input('password'));
        $account->degree = $request->input('degree');
        $account->image = "noimage.jpg";

        $account->save();

        
        return back()->with('status', 'Your account has been successfully created');

    }

    public function login(Request $request){

        
        $account = Client::where('email', $request->email)->first();
        
        if($account){
            if(Hash::check($request->input('password'), $account->password)){
                Session::put('client', $account);
                return redirect('/');
            }
            else{
                return back()->with('status', 'wrong email or password');
            }
        } 
    }


    public function signout(){
        Session::forget('client');
        
        return redirect('/');
    }
}
