<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    ###### Rediret To Dashborad Page ###### 🡫
    public function dashborad(){
        return view('Dashboard.index');
    }
}
