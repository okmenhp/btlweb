<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        
        if(Auth::user()->role == 1){
            return redirect()->route('admin.game.index');
        }
        else return redirect()->route('home');
    }
}
