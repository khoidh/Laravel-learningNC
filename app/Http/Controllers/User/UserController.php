<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
//use App\Exceptions\Handler;

class UserController extends Controller
{
    public function index()
    {
        //Call Query
//        $user= DB::table('users')->get();

        //Call ORM
//        $users= Users::all();
//        $users= Users::find(1);
//        $users= Users::take(4)->get();
//        $users= Users::count();
        //Return null
//        $users= Users::find(0);
        //Return 404
        $users= Users::findOrFail(0);
        dd($users);
        //Get Column name
//        $users= Users::all();
//        foreach ($users as $user)
//        {
//            echo($user->email);
//            echo("<br>");
//        }

    }


}
