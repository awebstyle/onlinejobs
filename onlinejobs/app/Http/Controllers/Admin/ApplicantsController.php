<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Applicant;
use App\Models\Client;
use App\Models\Vacancy;

use Illuminate\Support\Facades\Storage;

class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Applicant::All();
        return view('admin.applicants')->with('applicants', $applicants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applicant = Applicant::find($id);
        $client = Client::where('id', 'like', $applicant->clientid)->first();
        $vacancy = Vacancy::where('id', 'like', $applicant->vacancyid)->first();
        return view('admin.applicantdetails')->with('applicant', $applicant)->with('client', $client)->with('vacancy', $vacancy);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $applicant = Applicant::find($id);
        $applicant->delete();
        Storage::delete('public/resumes/'.$applicant->resume);

        return back()->with('status', 'Application successfully deleted');
    }

    public function sendMessage($id, Request $request){
        $applicant = Applicant::find($id);
        $applicant->status = $request->input('message');
        $applicant->update();

        return back();
    }
}
