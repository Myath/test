<?php

namespace App\Http\Controllers;

use App\Models\TastApp;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index(){
       return view('about');
   }
   public function store(Request $request){
       $data= new TastApp();
       $data->name= $request->name;
       $data->email= $request->email;
       $data->save();
       return redirect("all-data");
    }
    public function showdata(){
        $data["test"]=TastApp::all();
        

        return view('profile',$data);
    }
    public function delete($id){
        TastApp::where("id", $id)->delete();
        return back();
    }
}
