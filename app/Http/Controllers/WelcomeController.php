<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class WelcomeController extends Controller
{
    public function index()
    {
        return view("index");
    }
    
  
    
   
    

    public function loginVerif(Request $request){
        $tel=$request->input('tel');
        $password=$request->input('password');
        $test=DB::table('staff')
        ->where('telephone', $tel)
        ->where('password', $password)
        ->select('staff.*')
        ->get();
       
        if(count($test)==0){
            Session::put('errorLog', 'Mot de pass/tel incorrecte !!');
            return redirect('/');
         
        } else{
            
            
           return redirect('/index');
            }
    }




   
}