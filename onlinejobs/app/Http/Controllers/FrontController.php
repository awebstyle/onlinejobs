<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;
use App\Models\Vacancy;
use App\Models\Applicant;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function home(){
        $companies = Company::All();
        $categories = Category::All();
        return view('front.home')->with('companies', $companies)->with('categories', $categories);
    }

    public function showCompanies(){
        $companies = Company::All();
        $categories = Category::All();
        return view('front.company')->with('companies', $companies)->with('categories', $categories);
    }

    public function hiringCompany($id){
        $company = Company::find($id);
        $categories = Category::All();
        $vacancies = Vacancy::where('companyname', 'like', $company->name)->get();
        return view('front.hiringcompany')->with('company', $company)->with('vacancies', $vacancies)->with('categories', $categories);
    }

    public function jobByCategory($category){
       
        $categories = Category::get();
        $vacancies = Vacancy::where('category', 'like', $category)->get();
        $companies = Company::get();
        
        return view('front.jobbycategory')->with('vacancies', $vacancies)->with('categories', $categories)->with('companies', $companies)->with('category', $category);
    }

    public function contactUs(){
        $categories = Category::get();
        return view('front.contactus')->with('categories', $categories);
    }

    public function hiring(){
        $categories = Category::get();
        $vacancies = Vacancy::get();
        $companies = Company::get();
        return view('front.hiring')->with('categories', $categories)->with('vacancies', $vacancies)->with('companies', $companies);
    }

    public function about(){
        $categories = Category::get();
        return view('front.about')->with('categories', $categories);
    }

    public function advancedSearch(){
        $categories = Category::get();
        return view('front.advancedsearch')->with('categories', $categories);
    }

    public function applyNow($id){
        $categories = Category::get();
        $vacancy = Vacancy::find($id);
        $companies = Company::get();

        if(Session::has('client')){
            return view('front.submit')->with('categories', $categories)->with('vacancy', $vacancy)->with('companies', $companies);
        }
        else return redirect('/register');
        
    }

    public function submit(Request $request){

        $this->validate($request, [
            'resume' => "max:1999"
        ]);

        /* print($request->file('resume')); */
        $filenameWithExt = $request->file('resume')->getClientOriginalName();
        $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $ext = $request->file('resume')->getClientOriginalExtension();
        $filenameToStore = $fileName."_".time().'.'.$ext;

        $applicant = new Applicant();
        
        $applicant->fullname = Session::get('client')->firstname." ".Session::get('client')->middlename." ".Session::get('lastname');
        $applicant->occuptitle = $request->input('occuptitle');
        $applicant->company = $request->input('companyname');
        $applicant->clientid = $request->input('clientid');
        $applicant->vacancyid = $request->input('vacancyid');
        $applicant->status = "pending";
        $applicant->resume = $filenameToStore;

        $applicant->save();

        // CV upload
        $path = $request->file('resume')->storeAs('public/resumes', $filenameToStore);

        return redirect('/success')->with('status', 'Your application has been successfully sent');

    }

    public function success(){
        $categories = Category::get();
        return view('front.success')->with('categories', $categories);
    }
   
}
