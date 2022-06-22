<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\patient_infos;
use App\Models\subscription_plan;
use App\Models\subscription;
use Session;
use Carbon\Carbon;

class AuthController extends Controller
{   
    public function login(){

        return view('login');
    }
    public function registration()
    {
        return view('registration');
    }

    public function register_user(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        $doctor = new doctor();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $res = $doctor->save();
        if($res){
            return back() ->with('success','Successfully Registered');
            
        }else{
            return back() ->with('fail','Please Check Your Information Properly');
        }
        // return view('index');
    }

    public function login_user(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        $doctor =  doctor::where('email','=',$request->email)->first();
        if($doctor){
            if($request->password==$doctor->password){
                if($doctor->BMDC == null){
                    $request->session()->put('loginId',$doctor->id);
                    return redirect()->route('login_profile_edit',[$doctor->id]);
                }else{
                $request->session()->put('loginId',$doctor->id);
                return redirect()->route('doctor');
                }
            }else{
                return back() ->with('fail','Password not Matches');
            }
        }else{
            return back() ->with('fail','Enter Email Properly');
        }
    }

    public function login_profile_edit($id){

        $doctor_info=doctor::where('id','=',$id)->first();
        $doctor_id=$id;

        return view('login_profile_edit',compact('doctor_id','doctor_info'));
    }

    public function login_update_doctor(Request $request,$doctor_id)
    {
        doctor::find($doctor_id)->update([
            'phone'=>$request->mobile,
            'BMDC'=>$request->BMDC,
            'chember_name'=>$request->chember_name,
            'chember_add'=>$request->chember_add,
        ]);

        return redirect()->route('doctor');
    }

    public function doctor(){

        if(Session::has('loginId')){
            $doctor_info=doctor::where('id','=',Session::get('loginId'))->first();
            return view('doctor',compact('doctor_info'));
        }
    }

    public function profile_edit($id){

        $doctor_info=doctor::where('id','=',$id)->first();
        // $doctor_info=doctor::find($id);

        return view('profile_edit',compact('doctor_info'));
    }

    public function update_doctor(Request $request,$id)
    {
        doctor::find($id)->update([
            'phone'=>$request->mobile,
            'chember_name'=>$request->chember_name,
            'chember_add'=>$request->chember_add,
        ]);

        return redirect()->route('doctor',$id);
    }

    public function subscription($d_id)
    {

        $doctor_info=doctor::where('id','=',$d_id)->first();
        $subscription_plans = subscription_plan::all();
        $subscription_check = subscription::find($d_id);
        // dd($subscription_check);
        return view('subscription',compact('doctor_info','subscription_plans','subscription_check'));
    }

    public function subscription_info($id){
        $subscription_info = subscription_plan::find($id);
        return response()->json([
            'status'=>200,
            'subscription_info' => $subscription_info,
        ]);
    }

    public function subscription_add(Request $request){
        $subscription = new subscription();
        $subscription->d_id = $request->doctor_id;
        $subscription->package_name = $request->package_name;
        $subscription->package_price = $request->package_price;
        $subscription->duration = $request->package_duration;
        $res = $subscription->save();
        return back();
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

}
