<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\adminLoginRequest;
use App\Models\admin;
use Illuminate\Http\Request;


class AdminController extends Controller
{
######## GET VIEW LOGIN ##########
    public function adminlogin(){
        return view('Dashboard.login');
    }


####### Save Admin in database is Visit link AddAdmin #######
public function save(){
    $admin = new admin();
    $admin -> name ="Mohamed Mahrous";
    $admin -> email ="root@root.com";
    $admin -> password = bcrypt("root");
    $admin -> save();
    return redirect()->route('admin.login');
}


######## START POST LOGIN  ##############

public function postlogin(adminLoginRequest $request){

    $remember_me = $request->has('remember_me') ? true : false;
    ######## SECCESS TO LOGIN #########
    if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
        return redirect() -> route('admin.dashboard');
    }

   ######### FAILD TO LOGIN ###########
    return redirect()->back()->with(['error' => 'اسم المستخدم او كلمه المرور خطأ']);
}

######## END POST LOGIN  ################

}
