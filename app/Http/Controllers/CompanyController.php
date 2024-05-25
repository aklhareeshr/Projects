<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyCreateRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        /*if ($request->ajax()) {
            $data = Company::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $editRoute = route('company.edit', $row->id);
                    $deleteRoute = route('company.destroy', $row->id);
                    $csrf = csrf_field();
                    $method = method_field('DELETE');
                    $btn = '<div class="btn-group"> <a href="'.$editRoute.'" class="edit btn btn-primary btn-sm">Edit</a>';
                    $btn.= '<form action="' . $deleteRoute . '" method="POST" >
                        ' . $csrf . '
                        ' . $method . '
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this item?\')">Delete</button>
                    </form></div>';
                    return $btn;

                })
                ->rawColumns(['action'])
                ->make(true);
        }*/
        $companies = Company::paginate(10);
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyCreateRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $validated['logo'] = str_replace('public/', '', $logoPath);
        }
        Company::create($validated);
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company_info= Company::where('id', $id)->firstOrFail();
        return view('companies.show', compact('company_info'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company_info = Company::where('id', $id)->firstOrFail();
        return view('companies.edit',compact('company_info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {

        $validated = $request->validated();
        if ($request->hasFile('logo')) {
            if ($company->logo) {
                Storage::disk('public')->delete($company->logo);
            }
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $company->update($validated);
        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');


    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Company::where('id', $id)->firstOrFail()->delete();
        return redirect()->route('companies.index');
    }
}
