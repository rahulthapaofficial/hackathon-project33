<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.companies.index');
    }

    public function fetchCompanies()
    {
        $result = array('data' => array());
        $companies = Company::orderBy('id', 'desc')->get();
        foreach ($companies as $key => $company) {
            if ($company->status == 1) {
                $status = '<span class="badge badge-success">Active</span>';
            } else {
                $status = '<span class="badge badge-danger">Suspended</span>';
            }

            $buttons = '';
            if (Gate::check('suspend-company')) {
                if ($company->status == 0) {
                    $buttons .= '<a class="btn btn-sm btn-success companyStatusModifyBtn text-white" data-id="' . $company->id . '" data-value="1"><i class="fa fa-edit"></i> Activate</a>';
                } else {
                    $buttons .= '<a class="btn btn-sm btn-danger companyStatusModifyBtn text-white" data-id="' . $company->id . '" data-value="0"><i class="fa fa-edit"></i> Suspend</a>';
                }
            }
            if (Gate::check('modify-company')) {
                $buttons .= '&nbsp;<a href="' . route('companies.edit', $company->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Modify</a>';
            }
            if (!Gate::check('suspend-company') && !Gate::check('modify-company')) {
                $buttons .= '<i class="fa fa-exclamation-triangle" style="color: orange"></i> No Permission';
            }

            $result['data'][$key] = array(
                $key + 1,
                $company->name,
                $company->reg_no,
                $company->email,
                $company->phone_no,
                $company->address,
                $status,
                $buttons
            );
        }
        return json_encode($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company($request->all());
        $company->save();
        return redirect('dashboard/companies')->with('successMsg', 'Company Created Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function updatestatus(Request $request, $id)
    {
        if ($request->ajax()) {
            $company = Company::find($id);
            $company->status = $request->company_status;
            $company->update();
            return $company->status;
        } else {
            return "Sorry! Mr. LOL Bro :)";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
