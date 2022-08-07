<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class payroll extends Controller
{
    public function payroll(){
        $data = $data = DB::table('empadd') 
        ->join('empattendance', 'empadd.id', '=', 'empattendance.empAdd_id')
        ->join('empdeductionsalary', 'empattendance.id', '=', 'empdeductionsalary.empattendance_id')
        ->select('empadd.id',
        'empadd.fname','empadd.lname','empattendance.initialamount','empattendance.rate','empdeductionsalary.deductionAmount',
        'empattendance.absent','empdeductionsalary.deducted_salary')
        ->orderBy('empattendance.created_at', 'desc')
        ->get();
     

return view('payroll',compact('data'));
    
                    }

       public function searchpayroll(Request $request){
    
      
                        if($request ->isMethod('post'))
                        {
                            $lname=$request->get('lname');
                            $data= DB::table('empAdd')
                            ->join('empAttendance','empattendance.empAdd_id','=','empadd.id')
                            ->join('empdeductionsalary', 'empattendance.id', '=', 'empdeductionsalary.empattendance_id')
                            ->select('empadd.id',
                            'empadd.fname','empadd.lname','empattendance.rate','empdeductionsalary.deductionAmount',
                            'empattendance.absent','empdeductionsalary.deducted_salary')
                            ->where('lname', 'LIKE', '%' . $lname . '%')->paginate(5);
                
                        }
                        return view('payroll', compact('data'));
}
}