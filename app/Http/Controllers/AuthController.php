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
            'fname'=> 'required',
            'lname'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        $doctor = new doctor();
        $doctor->fname = $request->fname;
        $doctor->lname = $request->lname;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $res = $doctor->save();
        $id = doctor::where('email','=',$request->email)->first()->id;

        subscription::create([
            'd_id'=>$id
        ]);

        // dd($id);
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
                if($doctor->status == 0){
                    if($doctor->BMDC == null){
                        $request->session()->put('loginId',$doctor->id);
                        return redirect()->route('login_profile_edit',[$doctor->id]);
                    }else{
                        if($doctor->role == 1){
                            $request->session()->put('loginId',$doctor->id);
                            return redirect()->route('admin');
                        }else{
                        $request->session()->put('loginId',$doctor->id);
                        return redirect()->route('doctor');
                        }
                    }
                }else{
                    return back() ->with('fail','Your Account is Blocked!');
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
        $request->validate([
            'phone'=> 'required',
            'BMDC'=> 'required',
            'nid'=> 'required',
            'dob'=> 'required',
            'gender'=> 'required',
            'blood_group'=> 'required',
            'bDegree'=> 'required',
            'mCollege'=> 'required',
            'batch'=> 'required',
            'session'=> 'required',
            'passing_year'=> 'required',
            'professional_degree'=> 'required',
            'speciality'=> 'required'
        ]);
        doctor::find($doctor_id)->update([
            'phone'=>$request->phone,
            'BMDC'=>$request->BMDC,
            'nid'=>$request->nid,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'blood_group'=>$request->blood_group,
            'bDegree'=>$request->bDegree,
            'mCollege'=>$request->mCollege,
            'batch'=>$request->batch,
            'session'=>$request->session,
            'passing_year'=>$request->passing_year,
            'professional_degree'=>$request->professional_degree,
            'speciality'=>$request->speciality,
        ]);
        // $subscription = new subscription();
        // $subscription->d_id = $doctor_id;
        // $res = $subscription->save();


        return redirect()->route('doctor');
    }

    public function doctor(){

        if(Session::has('loginId')){
            $doctor_info=doctor::where('id','=',Session::get('loginId'))->first();
            $d_id = $doctor_info->id;
            // dd($d_id);
            $subscription = subscription::where('d_id','=',$d_id)->first();
            // dd($subscription->status);
            return view('doctor',compact('doctor_info','subscription'));
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
            'phone'=>$request->phone,
            'nid'=>$request->nid,
            'mCollege'=>$request->mCollege,
            'batch'=>$request->batch,
            'session'=>$request->session,
            'passing_year'=>$request->passing_year,
            'speciality'=>$request->speciality,
        ]);

        return redirect()->route('doctor',$id);
    }

    public function subscription($d_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $subscription_plans = subscription_plan::orderBy('id','desc')->get();
        // $subscription_check = subscription::find($d_id);
        $subscription_check = subscription::where('d_id','=',$d_id)->first();
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
        $d_id = $request->doctor_id;
        $id = subscription::where('d_id','=',$d_id)->first()->id;
        // dd($id);
        subscription::find($id)->update([
            'package_name' => $request->package_name,
            'package_price' => $request->package_price,
            'duration' => $request->package_duration, 
        ]);
        
        // $subscription = new subscription();
        // $subscription->d_id = $request->doctor_id;
        // $subscription->package_name = $request->package_name;
        // $subscription->package_price = $request->package_price;
        // $subscription->duration = $request->package_duration;
        // $res = $subscription->save();
        return back();
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

}
