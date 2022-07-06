<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\patient_infos;
use App\Models\chife_complaint;
use App\Models\clinical_finding;
use App\Models\investigation;
use App\Models\treatment_plan;
use App\Models\treatment_info;
use App\Models\drugs;
use App\Models\prescription;
use App\Models\medicine;
use App\Models\subscription;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $doctors = doctor::all();
        $lc_cs = chife_complaint::orderBy('id','desc')->paginate(10);
        $lc_fs = clinical_finding::orderBy('id','desc')->get();
        $investigation_lists = investigation::orderBy('id','desc')->get();
        $lt_ps = treatment_plan::orderBy('id','desc')->get();
        $medicines_lists = medicine::orderBy('id','desc')->get();
        $subscription_lists = subscription::orderBy('id','desc')->get();
        return view('admin_page',compact('doctors','lc_cs','lc_fs','investigation_lists','lt_ps','medicines_lists','subscription_lists'));
        // compact('doctor_info','patient','c_cs','lc_cs','c_fs','lc_fs','t_ps','lt_ps','treatment_infos','investigations','investigation_lists')
    }

    public function doctor_add(Request $request){
        $doctor = new doctor();
        $doctor->fname = $request->name;
        $doctor->lname = $request->name;
        $doctor->email = $request->email;
        // $doctor->phone=$request->mobile;
        // $doctor->BMDC=$request->BMDC;
        // $doctor->chember_name=$request->chember_name;
        // $doctor->chember_add=$request->chember_add;
        $doctor->password = $request->password;
        $res = $doctor->save();
        return back();
    }

    public function edit_doctor($id){
        $doctor = doctor::find($id);
        return response()->json([
            'status'=>200,
            'doctor_info' => $doctor,
        ]);
    }

    public function update_doctor(Request $request){
        $d_id = $request->doctor_id;
        // dd($cc_id);
        $doctor = doctor::find($d_id);
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->phone=$request->mobile;
        $doctor->BMDC=$request->BMDC;
        $doctor->chember_name=$request->chember_name;
        $doctor->chember_add=$request->chember_add;
        $res = $doctor->update();
        return back();
    }

    public function delete_doctor(Request $request){
        $del_doctor_id = $request->deletingId;
        // dd($del_doctor_id);
        $del_doctor_info = doctor::find($del_doctor_id);
        $del_doctor_info->delete();
        return back();
    }

    public function doctor_status($id){
        $getStatus = doctor::where('id',$id)->first();
        if($getStatus->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        doctor::where('id',$id)->update(['status' => $status]);
        return back();
    }

    public function subscription_status($id){
        $null = "";
        $start = Carbon::now()->format('d/m/Y');
        $getStatus = subscription::where('id',$id)->first();
        $getStatusMonth = $getStatus->duration;
        // dd($getStatusMonth);
        if($getStatusMonth <= 1){
            $end = now()->copy()->addMonth($getStatusMonth)->format('d/m/Y');
        }else{
            $end = now()->copy()->addMonths($getStatusMonth)->format('d/m/Y');
        }
        // dd($end);
        // return $getStatus;
        if($getStatus->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        if($status == 1){
            subscription::where('id',$id)->update(['status'=>$status,'start'=>$start,'end'=>$end]);
        }else{
            subscription::where('id',$id)->update(['status'=>$status,'start'=>$null,'end'=>$null]);
        }
        return back();
    }

    public function delete_subscription(Request $request){
        $del_subscription_id = $request->deletingId;
        // dd($del_drug_id);
        $del_subscription_info = subscription::find($del_subscription_id);
        $del_subscription_info->delete();
        return back();
    }

    // public function update_medicine(Request $request){
    //     $medicine_id = $request->medicine_id;
    //     // dd($cc_id);
    //     $medicine = medicine::find($medicine_id);
    //     $medicine->name = $request->medicine_name;
    //     $medicine->brand = $request->medicine_brand;
    //     $res = $medicine->update();
    //     return back();
    // }

}
