<?php

namespace EVisaUK\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use EVisaUK\Passport;
use EVisaUK\User;
use EVisaUK\Application;
use EVisaUK\Verification;
use PDF;
use EVisaUK\Rules\Birth;

class VisaApplicationController extends Controller
{
    //menampilkan halaman personal
    public function personal()
    {
        return view('pages.personal');
    }
    public function store(Request $request)
    {
		$this->validate(request(), [
        'birth' => new Birth()
		   ]);
        $passport = new Passport;
     /*   $passport->no_passport = $request->no_passport;
        $passport->expiry_date = $request->expiry_date;        
        $passport->date_issue = $request->date_issue; */
		$passport->given_name = $request->given_name;
        $passport->last_name = $request->last_name;
		$passport->birth = $request->birth;
        $passport->place_of_birth = $request->place_of_birth;
        $passport->address = $request->address;
        $passport->user_id = auth()->user()->id;
        $passport->save();
        //redirect ke family
        return redirect('/verification');
    }

    public function confirm()
    {
        return view('pages.confirm');
    }
    public function store_application(Request $request)
    {
        $application = new Application;
        $application->user_id = auth()->user()->id;
        $application->interview_date = $request->interview_date;
        $application->no_referensi = $request->no_referensi;
        $application->date_arrival = $request->date_arrival;
        $application->save();

        return redirect('/view-application');
    }

    public function verification()
    {
        $applications = Application::orderBy('created_at', 'desc')->get();
        return view('pages.verification')->withApplications($applications);
    }

    public function view()
    {
        return view('pages.viewapplication', compact('passport'));
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->get();
        return view('pages.edit', compact('users'));
    }
    public function pdf($id)
    {
        $pdf = PDF::loadView('pages.pdf', compact('passport'));
        return $pdf->download('Visa_Receipt.pdf');
    }

    public function detail($id)
    {
        $users = User::where('id', $id)->get();
        return view('pages.detail', compact('users'));
    }

    public function reply(Request $request)
    {
        $verification = new Verification;
        $verification->no_referensi = $request->no_referensi;
        $verification->status = $request->status;
        $verification->add_info = $request->add_info;
        $verification->user_id = $request->user_id;
        $verification->save();

        return redirect('/verification');
    }

    public function status()
    {
        return view('pages.status');
    }
}
