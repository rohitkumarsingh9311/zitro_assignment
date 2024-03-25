<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Support\Facades\Hash;

class employeeController extends Controller
{
    public function viewEmployee(){
        $employees=employee::all();
        return view('Admin.employee',compact('employees'));

    }
    public function AddEmployee(){
        return view('Admin.Addemployee');

    }
   
    public function StoreEmployee(Request $request){
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $username=$request->username;
        $email=$request->email;
        $department=$request->department;
        $position=$request->position;
        $password=Hash::make('test123');
        $registrationdate=$request->registrationdate;
        $status=1;

        if($request->id!='') {
            employee::find($request->id)->update([
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'username'=>$username,
                'email'=>$email,
                'department'=>$department,
                'position'=>$position,
                'password'=>$password,
                'registrationdate'=>$registrationdate,
                'status'=>$status
            ]);
        }
        else {
            employee::insert([
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'username'=>$username,
                'email'=>$email,
                'department'=>$department,
                'position'=>$position,
                'password'=>$password,
                'registrationdate'=>$registrationdate,
                'status'=>$status
            ]);
        }

        return redirect()->route('admin.view.employee');

    }
    public function StatusChange($id){
       
        $res = employee::find($id);
        if($res->status=='1'){
            $res->update([
                'status'=>0,
            ]);

        } else {
            $res->update([
                'status'=>1,
            ]);
        }

        return redirect()->route('admin.view.employee');
    }

    public function editEmployee($id){
        $employee=employee::findOrFail($id);
        return view('Admin.Editemployee',compact('employee'));

    }

    public function deleteEmployee($id){
employee::find($id)->delete();
return redirect()->route('admin.view.employee');
    }
    
}
