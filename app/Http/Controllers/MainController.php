<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\patient_infos;
use App\Models\chife_complaint;
use App\Models\clinical_finding;
use App\Models\treatment_plan;
use App\Models\treatment_info;
use App\Models\prescription;
use Illuminate\Http\Request;
use Session;

class MainController extends Controller
{
    public function patient_info(Request $request,$d_id)
    {

        $filename='';
        if($request->hasFile('image'))
        {

            $file= $request->file('image');
            if ($file->isValid()) {
                $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('patient',$filename);
            }
        }

    patient_infos::create([

        'name'=>$request->name,
        'age'=>$request->age,
        'mobile'=>$request->mobile,
        'gender'=>$request->gender,
        'Blood_group'=>$request->Blood_group,
        'date'=>$request->date,
        'occupation'=>$request->occupation,
        'address'=>$request->address,
        'email'=>$request->email,
        'image'=>$filename,


    ]);

    // return redirect()->back();
    return redirect()->route('doctor',$d_id);

    }

    public function edit_patient(Request $request,$d_id,$p_id){
        
        patient_infos::find($p_id)->update([
            
            'name' => $request->name,
            'age' => $request->age,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'Blood_group' => $request->Blood_group,
            'date' => $request->date,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'email' => $request->email
            // 'image' => $filename
        ]);

        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::where('id','=',$p_id)->get();
        return view('Find_patient',compact('doctor_info','patient'));
    }

    public function delete_patient(Request $request,$d_id,$p_id){
        $patient=patient_infos::where('id','=',$p_id)->get();
        $patient->each->delete();
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::where('id','=',$p_id)->get();
        // return view('Find_patient',compact('doctor_info','patient'));
        return redirect()->route('doctor',$d_id);
        // return "hello";
    }


    public function search(Request  $request,$id)
    {
        $doctor_info=doctor::where('id','=',$id)->first();

        $request->validate([
            'search'=> 'required'
        ]);
        $mobile = $request->search;
        $patient=patient_infos::where('mobile','=',$mobile)->get();
        // $patient=patient_infos::where('mobile','like','%'.$request->search.'%')->get();
        // dd($patient->all());

        // return redirect()->back();
        return view('Find_patient',compact('doctor_info','patient'));
    }

    public function update_patient(Request $request,$id)
    {
        patient_infos::find($id)->update([


            'bp_high'=>$request->bp_high,
            'bp_low'=>$request->bp_low,
            'Bleeding_disorder'=>$request->Bleeding_disorder,
            'Heart_Disease'=>$request->Heart_Disease,
            'Allergy'=>$request->Allergy,
            'Diabetic'=>$request->Diabetic,
            'Pregnant'=>$request->Pregnant,
            'Helpatics'=>$request->Helpatics,
            'other'=>$request->other
        ]);

        return redirect()->route('view_patient',$id);
    }

    public function view_patient($d_id,$p_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        $c_c = chife_complaint::all();
        $c_f = clinical_finding::all();
        $t_p = treatment_plan::all();
        $treatment_infos = treatment_info::where('p_id','like',$p_id)->get();
        return view('view_patient',compact('doctor_info','patient','c_c','c_f','t_p','treatment_infos'));
    }

    public function treatment_info(Request $request,$p_id){
        // dd($request->all());
        $pc_c = $request->pc_c;
        $pc_c = implode(',',$pc_c);
        $pc_f = $request->pc_f;
        $pc_f = implode(',',$pc_f);
        // dd($pc_f);
        $pt_p = $request->pt_p;
        $pt_p = implode(',',$pt_p);
        // dd($pt_p);

        $treatment_info = new treatment_info();
        $treatment_info->p_id = $p_id;
        $treatment_info->tooth_type = $request->tooth_type;
        $treatment_info->tooth_no = $request->tooth_no;
        $treatment_info->tooth_side = $request->tooth_side;
        $treatment_info->chife_complaints = $pc_c;
        $treatment_info->clinical_findings = $pc_f;
        $treatment_info->treatment_plans = $pt_p;
        $res = $treatment_info->save();

        return redirect()->back();
//         json_encode($request->pc_c)
// json_encode($request->pc_f)
// json_encode($request->pt_p)
    }
    public function treatments($d_id,$p_id,$t_id,$t_plans){
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        $treatment_info = treatment_info::where('p_id','like',$p_id)->first();

            if($t_plans == 'Restoration'){
                return view('treatmentplans',compact('doctor_info','patient','treatment_info'));
            }else{
                return "Hello";
            }
        // return view('treatmentplans');

    }
    public function prescription($d_id,$p_id){
        // $patient=patient_infos::findOrFail($id);
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);

        $treatment_info = treatment_info::where('p_id','like',$p_id)->first();
        $pc_c=$treatment_info->chife_complaints;
        $pc_f=$treatment_info->clinical_findings;
        $pt_p=$treatment_info->treatment_plans;
        $pc_c = explode(',',$pc_c);
        $pc_f = explode(',',$pc_f);
        // dd($pc_f);
        $pt_p = explode(',',$pt_p);
        // dd($pc_c);
        $drugs = prescription::where('p_id','=',$p_id)->get();
        // dd($drugs->all());

        return view('prescription', compact('doctor_info','patient','pc_c','pc_f','pt_p','drugs'));

        // return view('treatmentplans');

    }

    public function add_drug(Request $request,$d_id,$p_id){

        $treatment_info = treatment_info::where('p_id','like',$p_id)->first();
        $t_id = $treatment_info->id;
        // dd($t_id);
        
        $prescription = new prescription();
        $prescription->d_id = $d_id;
        $prescription->p_id = $p_id;
        $prescription->t_id = $t_id;
        $prescription->drug = $request->drug;
        $prescription->drug_time = $request->drug_time;
        $prescription->meal_time = $request->meal_time;
        $prescription->duration = $request->duration;
        // $prescription->duration = $request->duration;
        $res = $prescription->save();
        return redirect()->route('prescription',[$d_id,$p_id]);
        // return "hello";
    }


}
