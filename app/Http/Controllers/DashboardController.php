<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $userAll =  User::all()->count();
        $guestAll =  GuestBook::all()->count();


        if(Auth::user()->hasRole('admin')){
            $data['data'] = GuestBook::orderBy('id','DESC')->paginate(4);
            return view('admin.dashboard',$data, [
                'userAll' => $userAll,
                'guestAll' => $guestAll,
            ]);
        }

        elseif(Auth::user()->hasRole('')){
            return 'hello Member';
        }

        elseif(Auth::user()->hasRole('')){
            return 'Hello Guest';
        }

    }
}
