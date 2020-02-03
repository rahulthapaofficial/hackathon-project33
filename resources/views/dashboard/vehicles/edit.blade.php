@extends('layouts.master')
@push('page_title')
Modify Branch
@endpush
@section('content')
<div id="content">

    <div class="inner">

        <div class="row">
            <div class="col-lg-12">
                <h2>Manage Branches</h2>
            </div>
        </div>
        </hr />

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5 style="margin: 0">Modify Branch</h5>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('branches.update', $branch->id) }}" method="POST" role="form">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $branch->name }}" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Reg No.</label>
                                        <input type="number" class="form-control" name="reg_no" value="{{ $branch->reg_no }}"
                                            placeholder="Enter Reg No.">
                                    </div>
                                    <div class="form-group">
                                        <label>PAN/VAT No.</label>
                                        <input type="number" class="form-control" name="pan_vat_no" value="{{ $branch->pan_vat_no }}"
                                            placeholder="Enter PAN/VAT No.">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $branch->email }}" placeholder="Enter Email" required>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Phone No.</label>
                                            <input type="number" class="form-control" name="phone_no" value="{{ $branch->phone_no }}"
                                                placeholder="Enter Phone No." required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Mobile No.</label>
                                            <input type="number" class="form-control" name="mobile_no" value="{{ $branch->mobile_no }}"
                                                placeholder="Enter Mobile No." required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $branch->address }}"
                                            placeholder="Enter Address" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <h4 style="margin: 0">Select a location!
                                            <small style="margin: 0; float: right">Your Branch's location is
                                                marked.</small>
                                            </h3>
                                            <p>Click on a location on the map to locate the branch. Drag the marker to
                                                change location.</p>
                                            <div id="map"></div>
                                            <style>
                                                #map {
                                                    height: 285px;
                                                    width: 100%;
                                                }

                                                #map:hover {
                                                    box-shadow: 0 0 1px 1px;
                                                }
                                            </style>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label>Latitude</label>
                                            <input type="text" class="form-control" id="lat" name="latitude" value="{{ $branch->latitude }}"
                                                placeholder="Enter Latitude" readonly>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Longitude</label>
                                            <input type="text" class="form-control" id="lng" name="longitude" value="{{ $branch->longitude }}"
                                                placeholder="Enter Longitude" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                <button type="reset" class="btn btn-warning btn-sm">Reset</button>
                                <a href="{{ route('branches.index') }}" class="btn btn-danger btn-sm">Close</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
<script src="{{asset('plugins/dataTables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/dataTables/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('js/modify-map.js')}}"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBHZKZUHrAPqBKGEXz75yXj8fC0hqbqPg&callback=getLocation">
</script>
<script>
    $(document).ready(function () {
    $('#branchManage').addClass('active');
    $('#dataTables').dataTable();
  });
</script>

@endpush