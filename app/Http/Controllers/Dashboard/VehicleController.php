<?php

namespace App\Http\Controllers\Dashboard;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vehicle;
use App\VehicleType;
use Gate;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.vehicles.index');
    }

    public function fetchVehicles()
    {
        $result = array('data' => array());
        $vehicles = Vehicle::orderBy('id', 'desc')->get();
        foreach ($vehicles as $key => $vehicle) {
            if ($vehicle->status == 1) {
                $status = '<span class="badge badge-success">Available</span>';
            } else {
                $status = '<span class="badge badge-danger">Unavailable</span>';
            }

            if ($vehicle->condition == 1) {
                $condition = '<span class="badge badge-success">Good</span>';
            } else {
                $condition = '<span class="badge badge-primary">Average</span>';
            }

            $buttons = '';
            if (Gate::check('suspend-vehicle')) {
                if ($vehicle->status == 0) {
                    $buttons .= '<a class="btn btn-sm btn-success vehicleStatusModifyBtn text-white" data-id="' . $vehicle->id . '" data-value="1"><i class="fa fa-edit"></i> Activate</a>';
                } else {
                    $buttons .= '<a class="btn btn-sm btn-danger vehicleStatusModifyBtn text-white" data-id="' . $vehicle->id . '" data-value="0"><i class="fa fa-edit"></i> Suspend</a>';
                }
            }
            if (Gate::check('modify-vehicle')) {
                $buttons .= '&nbsp;<a href="' . route('companies.edit', $vehicle->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Modify</a>';
            }
            if (!Gate::check('suspend-vehicle') && !Gate::check('modify-vehicle')) {
                $buttons .= '<i class="fa fa-exclamation-triangle" style="color: orange"></i> No Permission';
            }

            $result['data'][$key] = array(
                $key + 1,
                $vehicle->name,
                $vehicle->vehicle_no,
                $vehicle->vehicleType->name,
                $vehicle->brand->name,
                $condition,
                $vehicle->color,
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
        $vehicletypes = VehicleType::all();
        return view('dashboard.vehicles.create', compact('vehicletypes'));
    }

    public function getBrandsById($categoryId)
    {
        $brands = Brand::whereVehicleTypeId($categoryId)->get();
        return $brands;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle = Vehicle::create($request->all());
        return redirect('dashboard/vehicles')->with('successMsg', 'Vehicle Created Successfully !');
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
        return view('dashboard.vehicles.create');
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
        //
    }
}
