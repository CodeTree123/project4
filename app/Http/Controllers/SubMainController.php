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

class SubMainController extends Controller
{
    public function chief_complaint(Request $request){
        $chife_complaint = new chife_complaint();
        $chife_complaint->name = $request->cc_name;
        $res = $chife_complaint->save();
        return back();
    }

    public function edit_chief_complaint($id){
        $chifeComplaint = chife_complaint::find($id);
        return response()->json([
            'status'=>200,
            'cc' => $chifeComplaint,
        ]);
    }
    
    public function update_chief_complaint(Request $request){
        $cc_id = $request->c_c_id;
        // dd($cc_id);
        $chife_complaint = chife_complaint::find($cc_id);
        $chife_complaint->name = $request->cc_name;
        $res = $chife_complaint->update();
        return back();
    }

    
    public function clinical_finding(Request $request){
        $clinical_finding = new clinical_finding();
        $clinical_finding->name = $request->cf_name;
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
    
    public function treatment_plan(Request $request){
        $treatment_plan = new treatment_plan();
        $treatment_plan->name = $request->tp_name;
        $res = $treatment_plan->save();
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
        $res = $treatment_plan->update();
        return back();
    }
}
