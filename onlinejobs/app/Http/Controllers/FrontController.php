<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class FrontController extends Controller
{
    public function home(){
        $companies = Company::All();
        return view('front.home')->with('companies', $companies);
    }

    public function showCompanies(){
        $companies = Company::All();
        return view('front.company')->with('companies', $companies);
    }

    public function hiringCompany($id){
        $company = Company::find($id);
        return view('front.hiringcompany')->with('company', $company);
    }
}
