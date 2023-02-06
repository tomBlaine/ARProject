<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\API;



class APIsController extends Controller
{
    public function submit(Request $request){

        $api = array(
            'name' => $request->name,
        );
        DB::table('a_p_i_s')->insert($api);
        echo "completed successfully!!!";
    }
}
