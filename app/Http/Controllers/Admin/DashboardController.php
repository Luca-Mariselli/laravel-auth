<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(User $user)
    {   
        $data = [
            // 'users' => User::all(),
            'active_user' => Auth::user(),
        ];
        return view('admin.dashboard',$data);
    }
}
