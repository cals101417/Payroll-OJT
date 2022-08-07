<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class Salary extends Controller
{
    public function salary(){
        
        $cust = DB::table('empdeductionsalary')->count();
        $data = DB::table('empadd')
            ->join('empattendance', 'empadd.id', '=', 'empattendance.empAdd_id')
            ->join('empdeductionsalary', 'empattendance.id', '=', 'empdeductionsalary.empattendance_id')
            ->select('empdeductionsalary.id','empadd.fname','empadd.lname','empattendance.initialamount',
            'empdeductionsalary.empattendance_id','empdeductionsalary.deductionAmount','empdeductionsalary.typeDeduction', 'empdeductionsalary.deducted_salary')
            ->orderBy('empdeductionsalary.created_at', 'desc')
            ->get();

      return view('salary',compact('data','cust'));
                
    }
    public function addsalary(Request $request){

        $request->validate([
            'empattendance_id'=>'required||unique:empdeductionsalary',
            'typeDeduction'=>'required',
            'deductionAmount'=>'required',
           
         
        ]);
       
        $empattendanceid = $request->input('empattendance_id');
        $totalquery = DB::table('empattendance')->select('total_salary')
                ->where('empattendance.id', '=', $empattendanceid)
                ->first();
              
                    
        $totalquery = $totalquery->total_salary;
        $deductedAmount = $request->input('deductionAmount');
        $deducted_salary = $totalquery - $deductedAmount;


        $query = DB::table('empdeductionsalary')->insert([
            
            'empattendance_id'=>$request->input('empattendance_id'),
            'typeDeduction'=>$request->input('typeDeduction'),
            'deductionAmount'=>$request->input('deductionAmount'),
            'deducted_salary' => $deducted_salary
            
        ]);

        if($query){

            return back()->with('success', 'Saved successfully!');

        }else{

            return back()->with('fail','Something wrong');
            
        }
    }

    
    public function deletesalary($id){

        $delete = DB::table('empdeductionsalary')
                ->where('id', $id)
                ->delete();
                return redirect('salary');
    }

    public function searchSalary(Request $request){
    
        
        if($request ->isMethod('post'))

        {
            $cust = DB::table('empdeductionsalary')->count();
            $lname=$request->get('lname');
            $data= DB::table('empadd')
            ->join('empattendance', 'empadd.id', '=', 'empattendance.empadd_id')
            ->join('empdeductionsalary', 'empattendance.id', '=', 'empdeductionsalary.empattendance_id')
            ->where('lname', 'LIKE', '%' . $lname . '%')->paginate(5);

        }
        return view('salary', compact('data','cust'));
        
        }
        
        public function deleterecord($id){

            $delete = DB::table('empAttendance')
                    ->where('empAdd_id', $id)
                    ->delete();
                    return redirect('records');
        }
}
