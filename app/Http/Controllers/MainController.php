<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\patient_infos;
use App\Models\appointment;
use App\Models\chife_complaint;
use App\Models\clinical_finding;
use App\Models\investigation;
use App\Models\treatment_plan;
use App\Models\treatment_info;
use App\Models\treatment_cost;
use App\Models\drugs;
use App\Models\prescription;
use App\Models\medicine;
use PDF;
// use Mail;
use Illuminate\Support\Facades\Mail;

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

        'd_id'=>$d_id,
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

    $p_id = patient_infos::where('mobile','=',$request->mobile)->first()->id;
    // dd($p_id);

    // return redirect()->back();
    // return redirect()->route('doctor',$d_id);
    return redirect()->route('view_patient',[$d_id,$p_id]);

    }

    public function patient_appoinment($id){
        $patient_info=patient_infos::find($id);
        return response()->json([
            'status'=>200,
            'p_info' => $patient_info,
        ]);
    }
    
    public function appointment(Request $request){
        appointment::create([
            'd_id'=>$request->d_id,
            'p_id'=>$request->p_id,
            'date'=>$request->date,
            'time'=>$request->time
        ]);
        return redirect()->back();
    }
    

    public function patient_list($id){
        $doctor_info=doctor::where('id','=',$id)->first();
        $patient_list = patient_infos::where('d_id','=',$doctor_info->id)->get();
        // $patient = patient_infos::all();
        return view('patient_list',compact('doctor_info','patient_list'));
    }

    public function edit_patient(Request $request,$d_id,$p_id){

        $filename='';
        if($request->hasFile('image'))
        {

            $file= $request->file('image');
            if ($file->isValid()) {
                $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('patient',$filename);
            }
        }
        
        patient_infos::find($p_id)->update([
            
            'name' => $request->name,
            'age' => $request->age,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'Blood_group' => $request->Blood_group,
            'date' => $request->date,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'email' => $request->email,
            'image' => $filename
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

        // return redirect()->route('view_patient',$d_id,$p_id);
        return redirect()->back();
    }

    public function view_patient($d_id,$p_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        $c_cs = chife_complaint::all();
        $lc_cs = chife_complaint::orderBy('id','desc')->get();
        $c_fs = clinical_finding::all();
        $lc_fs = clinical_finding::orderBy('id','desc')->get();
        $investigations = investigation::all();
        $investigation_lists = investigation::orderBy('id','desc')->get();
        $t_ps = treatment_plan::all();
        $lt_ps = treatment_plan::orderBy('id','desc')->get();
        $t_p_costs = treatment_cost::all();
        $treatment_infos = treatment_info::where('p_id','like',$p_id)->where('d_id','=',$d_id)->get();
        $total_cost =  treatment_info::where('p_id','like',$p_id)->sum('cost');
        $v_prescriptions = prescription::where('p_id','like',$p_id)->get();
        return view('view_patient',compact('doctor_info','patient','c_cs','lc_cs','c_fs','lc_fs','t_ps','lt_ps','t_p_costs','treatment_infos','total_cost','investigations','investigation_lists','v_prescriptions'));
    }

    public function treatment_info(Request $request,$d_id,$p_id){
        // dd($request->all());
        $pc_c = $request->pc_c;
        $pc_c = implode(',',$pc_c);
        $pc_f = $request->pc_f;
        $pc_f = implode(',',$pc_f);
        // dd($pc_f);
        $investigation = $request->p_investigation;
        $investigation = implode(',',$investigation);
        // dd($investigation); change pt_p after free time
        $pt_p = $request->pt_p;
        $pt_p = implode(',',$pt_p);
        // dd($pt_p);

        $pt_p_cost = treatment_cost::where('name','=',$pt_p)->where('d_id','=',$d_id)->first();
        $cost = $pt_p_cost->price;
        $paid='0';
        $due='0';
        // dd($pt_p_cost,$cost);

        $treatment_info = new treatment_info();
        $treatment_info->d_id = $d_id;
        $treatment_info->p_id = $p_id;
        $treatment_info->tooth_type = $request->tooth_type;
        $treatment_info->tooth_no = $request->tooth_no;
        $treatment_info->tooth_side = $request->tooth_side;
        $treatment_info->chife_complaints = $pc_c;
        $treatment_info->clinical_findings = $pc_f;
        $treatment_info->investigation = $investigation;
        $treatment_info->treatment_plans = $pt_p;
        $treatment_info->cost = $cost;
        $treatment_info->paid = $paid;
        $treatment_info->due = $due;
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
        $v_prescriptions = prescription::where('p_id','like',$p_id)->get();
        // dd($v_prescriptions);
        // foreach($v_prescriptions as $v_prescription){
        //     // dd($v_prescription);
        //     $drug_list = $v_prescription->drug_id_list;
        //     // dd($drug_list);
        //     $drug_list = explode(',',$drug_list);
        //     // dd($drug_list);
        // }
        // $drugs_infos = drugs::find($drug_list);

        
        // dd($drugs_info);
        return view('treatmentplans',compact('doctor_info','patient','treatment_info','v_prescriptions'));
      
            // if($t_plans == 'Restoration'){
            //     return view('treatmentplans',compact('doctor_info','patient','treatment_info'));
            // }else{
            //     return "Hello";
            // }
        // return view('treatmentplans');

    }
    public function prescription($d_id,$p_id){

        $ldate = date('d-m-Y');
        // dd($ldate);
        
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);

        $treatment_info = treatment_info::where('p_id','=',$p_id)->first();
        $tooth_no = $treatment_info->tooth_no;
        // dd($tooth_no);
        $pc_c=$treatment_info->chife_complaints;
        $pc_f=$treatment_info->clinical_findings;
        $pt_p=$treatment_info->treatment_plans;
        $investigations = $treatment_info->investigation;
        $pc_c = explode(',',$pc_c);
        $pc_f = explode(',',$pc_f);
        $pt_p = explode(',',$pt_p);
        $investigations = explode(',',$investigations);
        $t_id=$treatment_info->id;
        $t_plans=$treatment_info->treatment_plans;
        $medicines = medicine::all();
        $medicines_lists = medicine::orderBy('id','desc')->get();

        $drugs = drugs::where('p_id','=',$p_id)->where('date','=',$ldate)->get();
        return view('prescription', compact('doctor_info','patient','pc_c','pc_f','pt_p','investigations','drugs','t_id','t_plans','tooth_no','medicines','medicines_lists'));
    }
    public function view_prescription($d_id,$p_id){

        $ldate = date('d-m-Y');
        // dd($ldate);
        
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);

        $treatment_info = treatment_info::where('p_id','=',$p_id)->first();
        // $tooth_no = $treatment_info->tooth_no;
        // dd($tooth_no);
        $pc_c=$treatment_info->chife_complaints;
        $pc_f=$treatment_info->clinical_findings;
        $pt_p=$treatment_info->treatment_plans;
        $investigations = $treatment_info->investigation;
        $pc_c = explode(',',$pc_c);
        $pc_f = explode(',',$pc_f);
        $pt_p = explode(',',$pt_p);
        $investigations = explode(',',$investigations);
        $t_id=$treatment_info->id;
        $t_plans=$treatment_info->treatment_plans;
        $medicines = medicine::all();
        $medicines_lists = medicine::orderBy('id','desc')->get();

        $drugs = drugs::where('p_id','=',$p_id)->where('date','=',$ldate)->get();
        return view('view_prescription', compact('doctor_info','patient','pc_c','pc_f','pt_p','investigations','drugs','t_id','t_plans','medicines','medicines_lists')); //,'tooth_no'
    }


    public function add_drug(Request $request,$d_id,$p_id){
        // dd($request->date);
        $treatment_info = treatment_info::where('p_id','like',$p_id)->first();
        $t_id = $treatment_info->id;
        // dd($t_id);
        
        $drugs = new drugs();
        $drugs->d_id = $d_id;
        $drugs->p_id = $p_id;
        $drugs->t_id = $t_id;
        $drugs->drug_name = $request->drug_name;
        $drugs->drug_time = $request->drug_time;
        $drugs->meal_time = $request->meal_time;
        $drugs->duration = $request->duration;
        $drugs->date = $request->date;
        $res = $drugs->save();
        return redirect()->route('prescription',[$d_id,$p_id]);
        // return "hello";
    }

    public function edit_drug($id){
        $drugInfo = drugs::find($id);
        return response()->json([
            'status'=>200,
            'di' => $drugInfo,
        ]);
    }

    public function update_drug(Request $request){
        $drug_id = $request->drug_id;
        // dd($drug_id);
        $drug_info = drugs::find($drug_id);
        $drug_info->drug_name = $request->drug_name;
        $drug_info->drug_time = $request->drug_time;
        $drug_info->meal_time = $request->meal_time;
        $drug_info->duration = $request->duration;
        $res = $drug_info->update();
        return back();
    }

    public function delete_drug(Request $request){
        $del_drug_id = $request->deletingId;
        // dd($del_drug_id);
        $del_drug_info = drugs::find($del_drug_id);
        $del_drug_info->delete();
        return back();
    }
    
    public function get_drug_info($p_id){
        $ldate = date('d-m-Y');
        $drug_ids = drugs::where('p_id','=',$p_id)->where('date','=',$ldate)->get('id');
            // $drugs = drugs::find($drug_ids);
        foreach($drug_ids as $drug_id){
            $drug_id_list[]=$drug_id->id;
        }
        $drug_id_list = implode(',',$drug_id_list);
        return response()->json([
            'status'=>200,
            'drugIds' => $drug_id_list,
        ]);
    }

    public function prescription_add(Request $request,$d_id,$t_id,$t_plans){
        // return "hello";
        $p_id = $request->patientID;
        $date = $request->date;
        $check = prescription::where('p_id','=',$p_id)->where('date','=',$date)->first();
        if($check){
            return back()->with('success','Sorry! You already Add this Information.');;
        }else{
        $prescription = new prescription();
        $prescription->d_id = $d_id;
        $prescription->p_id = $p_id;
        $prescription->t_id = $t_id;
        $prescription->t_plan = $t_plans;
        $prescription->drug_id_list = $request->drugIdList;
        $prescription->date = $date;
        $res = $prescription->save();
        return back();
        }
    }

    public function prescription_delete(Request $request){
        $del_prescription_id = $request->deletingId;
        // dd($del_drug_id);
        $del_prescription_info = prescription::find($del_prescription_id);
        $del_prescription_info->delete();
        return back();
    }

    public function invoice($d_id,$p_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        //test for new patient id custom create
        $l=patient_infos::latest('id')->first();
        $last = $l->id;
        $last++;
        // dd($last);
        $ldate = date('dmY');
        $view = $ldate.'/'.$last;
        // dd($view);
        //test end
        $treatment_infos = treatment_info::where('p_id','=',$p_id)->where('d_id','=',$d_id)->get();
        $total_cost =  treatment_info::where('p_id','=',$p_id)->sum('cost');
        $total_paid =  treatment_info::where('p_id','=',$p_id)->sum('paid');
        $total_due =  treatment_info::where('p_id','=',$p_id)->sum('due');

        $tex = $total_cost*10/100;
        $total_Amount = $total_cost - $tex;
        // dd($total_cost,$total_paid,$total_due);
        $treatment_invoice_infos = treatment_info::where('p_id','like',$p_id)->where('status','=',0)->get();

        return view('invoice',compact('doctor_info','patient','treatment_infos','treatment_invoice_infos','view','total_cost','total_paid','total_due','tex','total_Amount'));
    }

    public function treatment_payment(Request $request){
        $t_info_id = $request->t_plan_id;
        // dd($t_info_id);
        $treatment_infos = treatment_info::find($t_info_id);
        $cost = $treatment_infos->cost;
        // dd($cost);
        $previous_paid = $treatment_infos->paid;
        // dd($previous_paid);
        $paid_amount = $request->tp_amount;
        $paid = $previous_paid + $paid_amount;
        // dd($paid);
        $due = $cost - $paid;
        // dd($due);

        treatment_info::find($t_info_id)->update([
            'paid'=>$paid,
            'due'=>$due
        ]);

        if($cost == $paid){
            $status = 1;
            treatment_info::find($t_info_id)->update([
                'status'=>$status,
            ]);
        }
        
        
        return back();
    }

    public function sendMailWithPdf($d_id,$p_id){
        $ldate = date('d-m-Y');
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $patient=patient_infos::findOrFail($p_id);
        $treatment_info = treatment_info::where('p_id','=',$p_id)->first();
        $tooth_no = $treatment_info->tooth_no;
        // dd($tooth_no);
        $pc_c=$treatment_info->chife_complaints;
        $pc_f=$treatment_info->clinical_findings;
        $pt_p=$treatment_info->treatment_plans;
        $investigations = $treatment_info->investigation;
        $pc_c = explode(',',$pc_c);
        $pc_f = explode(',',$pc_f);
        $pt_p = explode(',',$pt_p);
        $investigations = explode(',',$investigations);
        $t_id=$treatment_info->id;
        $t_plans=$treatment_info->treatment_plans;
        $medicines = medicine::all();
        $medicines_lists = medicine::orderBy('id','desc')->get();
        $drugs = drugs::where('p_id','=',$p_id)->where('date','=',$ldate)->get();

        $data["email"] = "mahadimonna01@gmail.com";
        $data["Title"] = "Email Test";
        $data["body"] = "Email Test body";

        $pdf = PDF::loadview('view_prescription',compact('doctor_info','patient','pc_c','pc_f','pt_p','investigations','drugs','t_id','t_plans','tooth_no','medicines','medicines_lists'),$data)->setOptions(['defaultFont' => 'sans-serif']);

        Mail::send([],$data,function($msg) use ($data,$pdf){
            $msg->to($data["email"])
            ->subject($data["Title"])
            ->attachData($pdf->output(),"test.pdf");
        });
        // dd("email has been sent.");
        return back();
    }


}
