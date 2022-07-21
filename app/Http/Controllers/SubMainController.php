<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\patient_infos;
use App\Models\chife_complaint;
use App\Models\clinical_finding;
use App\Models\investigation;
use App\Models\medicine;
use App\Models\treatment_plan;
use App\Models\treatment_cost;
use App\Models\treatment_info;
use App\Models\prescription;
use Illuminate\Http\Request;


class SubMainController extends Controller
{
    public function doctor_profile_setting($d_id)
    {
        $doctor_info=doctor::where('id','=',$d_id)->first();
        $t_ps = treatment_plan::all();
        $t_p_costs = treatment_cost::where('d_id','=',$d_id)->get();
        return view('doctor_profile_setting',compact('doctor_info','t_ps','t_p_costs'));
    }



    public function chife_complaint(Request $request){
        // $chife_complaint = new chife_complaint();
        // $chife_complaint->name = $request->cc_name;
        // $chife_complaint->status = $request->cc_status;
        // $res = $chife_complaint->save();
        // return back();
    }

    public function edit_chife_complaint($id){
        $chifeComplaint = chife_complaint::find($id);
        return response()->json([
            'status'=>200,
            'cc' => $chifeComplaint,
        ]);
    }
    
    public function update_chife_complaint(Request $request){
        $cc_id = $request->c_c_id;
        // dd($cc_id);
        $chife_complaint = chife_complaint::find($cc_id);
        $chife_complaint->name = $request->cc_name;
        $res = $chife_complaint->update();
        return back();
    }

    public function delete_chife_complaint(Request $request){
        $del_cc_id = $request->deletingId;
        // dd($del_drug_id);
        $del_cc_info = chife_complaint::find($del_cc_id);
        $del_cc_info->delete();
        return back();
    }

    
    public function clinical_finding(Request $request){
        $clinical_finding = new clinical_finding();
        $clinical_finding->name = $request->cf_name;
        $clinical_finding->status = $request->cf_status;
        $res = $clinical_finding->save();
        return back();
    }

    public function edit_clinical_finding($id){
        $clinicalFinding = clinical_finding::find($id);
        return response()->json([
            'status'=>200,
            'cf' => $clinicalFinding,
        ]);
    }

    public function update_clinical_finding(Request $request){
        $cf_id = $request->c_f_id;
        // dd($cc_id);
        $clinical_finding = clinical_finding::find($cf_id);
        $clinical_finding->name = $request->cf_name;
        $res = $clinical_finding->update();
        return back();
    }

    public function delete_clinical_finding(Request $request){
        $del_cf_id = $request->deletingId;
        // dd($del_drug_id);
        $del_cf_info = clinical_finding::find($del_cf_id);
        $del_cf_info->delete();
        return back();
    }

    public function investigation(Request $request){
        $investigation = new investigation();
        $investigation->name = $request->investigation_name;
        $investigation->status = $request->investigation_status;
        $res = $investigation->save();
        return back();
    }

    public function edit_investigation($id){
        $investigation = investigation::find($id);
        return response()->json([
            'status'=>200,
            'inves' => $investigation,
        ]);
    }

    public function update_investigation(Request $request){
        $investigation_id = $request->investigation_id;
        // dd($cc_id);
        $investigation = investigation::find($investigation_id);
        $investigation->name = $request->investigation_name;
        $res = $investigation->update();
        return back();
    }

    public function delete_investigation(Request $request){
        $del_investigation_id = $request->deletingId;
        // dd($del_drug_id);
        $del_investigation_info = investigation::find($del_investigation_id);
        $del_investigation_info->delete();
        return back();
    }

    public function treatment_plan(Request $request){
        // dd($request->all());
        $treatment_plan = new treatment_plan();
        $treatment_plan->name = $request->tp_name;
        $treatment_plan->status = $request->tp_status;
        $treatment_plan->save();

        $treatment_cost = new treatment_cost();
        $treatment_cost->d_id = $request->d_id;
        $treatment_cost->name = $request->tp_name;
        $treatment_cost->price = $request->tp_cost;
        $treatment_cost->save();

        return back();
    }

    public function edit_treatment_plan($id){
        $treatmentPlan = treatment_plan::find($id);
        return response()->json([
            'status'=>200,
            'tp' => $treatmentPlan,
        ]);
    }

    public function update_treatment_plan(Request $request){
        $tp_id = $request->t_p_id;
        // dd($cc_id);
        $treatment_plan = treatment_plan::find($tp_id);
        $treatment_plan->name = $request->tp_name;
        $treatment_plan->cost = $request->tp_cost;
        $res = $treatment_plan->update();
        return back();
    }

    public function delete_treatment_plan(Request $request){
        $del_tp_id = $request->deletingId;
        // dd($del_drug_id);
        $del_tp_info = treatment_plan::find($del_tp_id);
        $del_tp_info->delete();
        return back();
    }

    public function treatment_cost(Request $request){
        $treatment_cost = new treatment_cost();
        $treatment_cost->d_id = $request->d_id;
        $treatment_cost->name = $request->tp_name;
        $treatment_cost->price = $request->tp_price;
        $res = $treatment_cost->save();
        return back();
    }

    public function edit_treatment_cost($id){
        $treatmentCost = treatment_cost::find($id);
        return response()->json([
            'status'=>200,
            'tp_cost' => $treatmentCost,
        ]);
    }

    public function update_treatment_cost(Request $request){
        $tp_id = $request->tp_cost_id;
        // dd($cc_id);
        $treatment_cost = treatment_cost::find($tp_id);
        $treatment_cost->name = $request->tp_cost_name;
        $treatment_cost->price = $request->tp_cost;
        $res = $treatment_cost->update();

        return back();
    }

    public function delete_treatment_cost(Request $request){
        $del_tpCost_id = $request->deletingId;
        // dd($del_drug_id);
        $del_tpcost_info = treatment_cost::find($del_tpCost_id);
        $del_tpcost_info->delete();
        return back();
    }

    public function medicine_add(Request $request){
        $medicine = new medicine();
        $medicine->name = $request->medicine_name;
        $medicine->brand = $request->medicine_brand;
        $res = $medicine->save();
        return back();
    }

    public function edit_medicine($id){
        $medicine = medicine::find($id);
        return response()->json([
            'status'=>200,
            'medicine_info' => $medicine,
        ]);
    }

    public function update_medicine(Request $request){
        $medicine_id = $request->medicine_id;
        // dd($cc_id);
        $medicine = medicine::find($medicine_id);
        $medicine->name = $request->medicine_name;
        $medicine->brand = $request->medicine_brand;
        $res = $medicine->update();
        return back();
    }

    public function delete_medicine(Request $request){
        $del_medicine_id = $request->deletingId;
        // dd($del_drug_id);
        $del_medicine_info = medicine::find($del_medicine_id);
        $del_medicine_info->delete();
        return back();
    }

    
}
