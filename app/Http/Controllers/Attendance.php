<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class Attendance extends Controller
{
    public function attendance(){
        $data = $data = DB::table('empadd') 
        ->join('empattendance', 'empadd.id', '=', 'empattendance.empAdd_id')
        ->select('empattendance.id','empattendance.empAdd_id',
        'empadd.fname','empadd.lname','empattendance.rate','empattendance.workdays',
        'empattendance.absent','empattendance.initialamount')
        ->orderBy('empattendance.created_at', 'desc')
        ->get();
                    
return view('attendance',compact('data'));
    
    }
    public function searchAttendance(Request $request){
    
      
        if($request ->isMethod('post'))
        {
            $lname=$request->get('lname');
            $data= DB::table('empAdd')
            ->join('empAttendance','empattendance.empAdd_id','=','empadd.id')
            ->select('empattendance.id','empattendance.empAdd_id',
                            'empadd.lname','empadd.fname','empattendance.rate','empattendance.workdays',
                            'empattendance.initialamount',)
            ->where('lname', 'LIKE', '%' . $lname . '%')->paginate(5);

        }
        return view('attendance', compact('data'));
        }
        
        public function deleteAttendance($id){
            $delete = DB::table('empAttendance')
                    ->where('empAdd_id', $id)
                    ->delete();
                    return redirect('attendance');
        }

    public function welcome(){
        return view("welcome");
    }
    public function addattendance(Request $request){

        $request->validate([
            'empAdd_id'=>'required|unique:empattendance',
            'datefrom'=>'required',
            'dateto'=>'required',
            'rate'=>'required',
            'absent'=>'required',
            'workdays'=>'required',
            'initialamount'=>'required',
         
        ]);
        $queryattendance = DB::table('empattendance')->insert([
            'empAdd_id'=>$request->input('empAdd_id'),
            'datefrom'=>$request->input('datefrom'),
            'dateto'=>$request->input('dateto'),
            'rate'=>$request->input('rate'),
            'absent'=>$request->input('absent'),
            'workdays'=>$request->input('workdays'),
            'initialamount'=>$request->input('initialamount'),
            'total_salary'=>$request->input('initialamount')
          
        ]);
        
        if($queryattendance){
            return back()->with('success', 'Saved successfully!');
        }else{
            return back()->with('fail','Something wrong');
        }
        
    }
}
