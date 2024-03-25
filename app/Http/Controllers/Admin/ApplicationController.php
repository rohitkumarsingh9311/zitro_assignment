<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function viewApplication(){
        $applications=Application::all();
        return view('Admin.application',compact('applications'));

    }
    public function AddApplication(){
        return view('Admin.Addapplication');

    }
   
    public function StoreApplication(Request $request){
        $name=$request->name;
        $url=$request->url;
        $status=1;

        if($request->id!='') {
            Application::find($request->id)->update([
                'name'=>$name,
                'url'=>$url,
                'status'=>$status
            ]);
        }
        else {
            Application::insert([
                'name'=>$name,
                'url'=>$url,
                'status'=>$status
            ]);
        }

        return redirect()->route('admin.view.application');

    }
    public function StatusChange($id){
       
        $res = Application::find($id);
        if($res->status=='1'){
            $res->update([
                'status'=>0,
            ]);

        } else {
            $res->update([
                'status'=>1,
            ]);
        }

        return redirect()->route('admin.view.application');
    }

    public function editApplication($id){
        $application=Application::findOrFail($id);
        return view('Admin.Editapplication',compact('application'));

    }

    public function deleteApplication($id){
        Application::find($id)->delete();
return redirect()->route('admin.view.application');
    }
}
