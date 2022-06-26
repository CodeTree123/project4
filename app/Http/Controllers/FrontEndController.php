<?php

namespace App\Http\Controllers;

use App\Models\patient_infos;
use Illuminate\Http\Request;
use App\Models\subscription_plan;
use App\Models\appointment;

class FrontEndController extends Controller
{
    public function header()
    {
        return view('header');
    }
    public function footer()
    {
        return view('footer');
    }
    public function admin_page()
    {
        return view('admin_page');
    }
    public function prescription()
    {
        return view('prescription');
    }

    public function subscription()
    {
        $subscription_plans = subscription_plan::all();
        return view('subscription',compact('subscription_plans'));
    }

    public function appointment($d_id)
    {
        $appointment = appointment::where('d_id','=',$d_id)->get();
        return view('appointment',compact('appointment'));
    }
    public function index()
    {

        return view('index');
    }

    public function loginForm()
    {
        return view('loginForm');
    }

    public function patient()
    {

        return view('patient');
    }

    public function prescription_list()
    {
        return view('prescription_list');
    }

    public function treatment_plan()
    {
        return view('treatment_plan');
    }

    public function treatmentPlans()
    {
        return view('treatmentPlans');
    }

    public function registration()
    {
        return view('registration');
    }
    public function profile_edit()
    {
        return view('profile_edit');
    }

    public function login()
    {
        return view('login');
    }
    public function invoice()
    {
        return view('invoice');
    }
}
