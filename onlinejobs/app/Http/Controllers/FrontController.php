<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;
use App\Models\Vacancy;

class FrontController extends Controller
{
    public function home(){
        $companies = Company::All();
        $categories = Category::All();
        return view('front.home')->with('companies', $companies)->with('categories', $categories);
    }

    public function showCompanies(){
        $companies = Company::All();
        return view('front.company')->with('companies', $companies);
    }

    public function hiringCompany($id){
        $company = Company::find($id);
        return view('front.hiringcompany')->with('company', $company);
    }

    public function jobByCategory($category){
       
        $categories = Category::get();
        $vacancies = Vacancy::where('category', 'like', $category)->get();
        $companies = Company::get();
        
        return view('front.jobbycategory')->with('vacancies', $vacancies)->with('categories', $categories)->with('companies', $companies)->with('category', $category);
    }
}
