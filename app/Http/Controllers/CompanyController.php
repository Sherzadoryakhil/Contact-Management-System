<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::allowedTrash()
        ->allowedSorts(['name', 'website', 'email'], '-id')
        ->allowedSearch('name', 'website', 'email')
        ->forUser(Auth::user())
        ->paginate(10);

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = new Company();
        return view('companies.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $request->user()->companies()->create($request->validated());
        return redirect()->route('companies.index')->with('message', 'Company has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {   
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->validated());
        return redirect()->route('companies.index')->with('message', 'Company has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        $redirect = request()->query('redirect');
        return ($redirect ? redirect()->route($redirect) : back())
        ->with('message', 'Company has been moved to trash')
        ->with('undoRoute', getUndoRoute('companies.restore', $company));
    }

    public function restore(Company $company)
    {
        $company->restore();
        return back()
        ->with('message', 'Company has been restored to trash')
        ->with('undoRoute', getUndoRoute('companies.destroy', $company));
    }

    public function forceDelete(Company $company)
    {
        $company->forceDelete();
        return back()
        ->with('message', 'Company has been removed permenantly');
    }
}
