<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Vacancy;
use App\Models\Category;
use App\Models\Company;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::get();
        return view('admin.vacancies')->with('vacancies', $vacancies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::get();
        $categories = Category::get();

        return view('admin.addvacancy')->with('companies', $companies)->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancy = new Vacancy();
        
        $vacancy->companyname = $request->input('companyname');
        $vacancy->category = $request->input('category');
        $vacancy->occuptitle = $request->input('occuptitle');
        $vacancy->numofemp = $request->input('numofemp');
        $vacancy->salary = $request->input('salary');
        $vacancy->duration = $request->input('duration');
        $vacancy->experience = $request->input('experience');
        $vacancy->description = $request->input('description');
        $vacancy->prefsex = $request->input('prefsex');
        $vacancy->sector = $request->input('sector');

        $vacancy->save();

        return back()->with('status', 'The vacancy has been successfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacancy = Vacancy::find($id);
        $companies = Company::get();
        $categories = Category::get();
        return view('front.jobdetails')->with('vacancy', $vacancy)->with('companies', $companies)->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacancy = Vacancy::find($id);
        $companies = Company::where('name', '!=', $vacancy->companyname)->get();
        $categories = Category::where('category', '!=', $vacancy->category)->get();

        return view('admin.editvacancy')->with('vacancy', $vacancy)->with('companies', $companies)->with('categories', $categories);
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
        $vacancy = Vacancy::find($id);

        $vacancy->companyname = $request->input('companyname');
        $vacancy->category = $request->input('category');
        $vacancy->occuptitle = $request->input('occuptitle');
        $vacancy->numofemp = $request->input('numofemp');
        $vacancy->salary = $request->input('salary');
        $vacancy->duration = $request->input('duration');
        $vacancy->experience = $request->input('experience');
        $vacancy->description = $request->input('description');
        $vacancy->prefsex = $request->input('prefsex');
        $vacancy->sector = $request->input('sector');

        $vacancy->update();

        return redirect('/vacancies')->with('status', 'The vacancy has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();

        return back()->with('status', 'The vacancy has been successfully deleted');
    }

    public function searchJob(Request $request)
    {
        $categories = Category::get();
        $companies = Company::get();
        $searchedjob = $request->input('searchedjob');
        $companyname = $request->input('company');
        $category = $request->input('category');
        
        if($searchedjob){
            if($companyname){
                if($category){
                    $vacancies = Vacancy::where('occuptitle', 'like', '%'.$searchedjob.'%')
                        ->orWhere('description', 'like', '%'.$searchedjob.'%')
                        ->orWhere('category', 'like', '%'.$searchedjob.'%')
                        ->where('companyname', '=', $companyname)
                        ->where('category', '=', $category)
                        ->get();
                }else{
                    $vacancies = Vacancy::where('occuptitle', 'like', '%'.$searchedjob.'%')
                        ->orWhere('description', 'like', '%'.$searchedjob.'%')
                        ->orWhere('category', 'like', '%'.$searchedjob.'%')
                        ->where('companyname', '=', $companyname)
                        ->get();
                }
            }elseif($category){
                $vacancies = Vacancy::where('occuptitle', 'like', '%'.$searchedjob.'%')
                        ->orWhere('description', 'like', '%'.$searchedjob.'%')
                        ->orWhere('category', 'like', '%'.$searchedjob.'%')
                        ->where('category', '=', $category)
                        ->get();
            }else{
                $vacancies = Vacancy::where('occuptitle', 'like', '%'.$searchedjob.'%')
                        ->orWhere('description', 'like', '%'.$searchedjob.'%')
                        ->orWhere('category', 'like', '%'.$searchedjob.'%')
                        ->get();
            }
        }else{
            if($companyname){
                if($category){
                    $vacancies = Vacancy::where('companyname', '=', $companyname)
                        ->where('category', '=', $category)
                        ->get();
                }else{
                    $vacancies = Vacancy::where('companyname', '=', $companyname)
                        ->get();
                }
            }else{
                if($category){
                    $vacancies = Vacancy::where('category', '=', $category)
                        ->get();
                }
                else{
                    return back()->with('status', 'No job found');
                }
            }
        }
            
        return view('front.advancedsearchresult')
            ->with('categories', $categories)
            ->with('vacancies', $vacancies)
            ->with('searchedjob', $searchedjob)
            ->with('category', $category)
            ->with('companyname', $companyname)
            ->with('companies', $companies);
            
    }

        
        
}

