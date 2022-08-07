<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\User;
use Session;

class Realtimechat extends Controller
{
    public function realtimechat(){
        $cnt = DB::table('empadd')->count();
        $rvn = DB::table('empadd') 
        ->join('empattendance', 'empadd.id', '=', 'empattendance.empAdd_id')
        ->join('empdeductionsalary', 'empattendance.id', '=', 'empdeductionsalary.empattendance_id')
        ->select('empdeductionsalary.deducted_salary')
        ->sum(\DB::raw('deducted_salary'));

        $data = array();
        if(Session::has('loginID')){
            $data = user::where('id', '=', Session::get('loginID'))->first();
        }
        return view('chat',compact('data','cnt','rvn'));
                    }
}
