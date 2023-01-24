<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminRoleUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Layout\Content;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
use Encore\Admin\Auth\Database\Administrator;





class RegisterController extends Controller
{
   public function register()
   {
    if(Auth::guard()->check()){
        return redirect("/dashboard");
    }
        return view('register');
   }

   public function postRegistration(Request $request)
   {

    // dd($request);
       $req = $request;

           if(Validator::make($_POST, [
               'name' => 'required|string|min:3',
               
           ])->fails()){
               return back()->withInput()->withErrors([
                   'name' => 'Enter your valid name',
               ]);
           }

           if(Validator::make($_POST, [
               'email' => 'required|string|email',
           ])->fails()){
               return back()->withInput()->withErrors([
                   'email' => 'Enter your valid email address',
                ]);
           }

           if(Validator::make($_POST, [
               'password' => 'required|string|min:6',
           ])->fails()){
               return back()->withInput()->withErrors([
                   'password' => 'Enter your valid password',
               ]);
           }

           if(Validator::make($_POST, [
               'password_1' => 'required|string|min:6',
           ])->fails()){
               return back()->withInput()->withErrors([
                   'password_1' => 'Enter your valid password',
               ]);
           }

           if($_POST['password'] != $_POST['password_1']){
               return back()->withInput()->withErrors([
                   'password_1' => 'Passwords do not match',
               ]);
           }

           $user = Administrator::where([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
           
       ])->first();

           if($user){
               return back()->withInput()->withErrors([
                   'name' => 'User already exists',
               ]);
           }else{
               $admin = new Administrator();
               $admin->name = $_POST['name'];
               $admin->email = $_POST['email'];
               $admin->password = Hash::make($_POST['password']);
               $admin->save();
               

           if(!$admin->save()){
               return back()->withInput()->withErrors([
                   'username' => 'Failed to register',
               ]);
           }
        }
           $req = AdminRoleUser::where([
            'role_id' => $admin->id])->first();
            
            if($req){
                dd($req);
            }else{
                $role = new AdminRoleUser();
                $role->user_id = $admin->id;
                $role->role_id = 2;
                $role->save();
                
            }
            die("no role");
    }
       


   public function user_details()
   {
    $_SESSION['form'] = Auth::user();
    return view('user_details');
   }
}
