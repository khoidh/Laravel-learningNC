<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConnectController extends Controller
{
    /**
     * Check connect database mysql
     */
    public function index()
    {
//        echo "Đây là index trong home controller";
        try {
            DB::connection()->getPdo();
            dd("OK");
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
    }
}
