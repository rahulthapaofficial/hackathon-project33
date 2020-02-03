@extends('layouts.master')

@push('page_title')
Create User
@endpush

@section('main-content')
<div class="main-content">
  <div class="breadcrumb">
    <h1>Dashboard</h1>
    <ul>
      <li><a href="href">Users</a></li>
      <li>Create</li>
    </ul>
  </div>
  <div class="separator-breadcrumb border-top"></div>
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-body">
          <form action="{{ route('companies.store') }}" method="POST" role="form" class="needs-validation"
            novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Name <span class="required">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                  <div class="invalid-feedback">
                    Please Provide Your Company Name.
                  </div>
                </div>
                <div class="form-group">
                  <label>Reg No. <span class="required">*</span></label>
                  <input type="number" class="form-control" name="reg_no" placeholder="Enter Reg No." required>
                  <div class="invalid-feedback">
                    Please Provide Your Company Reg No.
                  </div>
                </div>
                <div class="form-group">
                  <label>PAN/VAT No. <span class="required">*</span></label>
                  <input type="number" class="form-control" name="pan_vat_no" placeholder="Enter PAN/VAT No." required>
                  <div class="invalid-feedback">
                    Please Provide Your Company PAN/VAT No.
                  </div>
                </div>
                <div class="form-group">
                  <label>Email <span class="required">*</span></label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                  <div class="invalid-feedback">
                    Please Provide Your Company Email.
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label>Phone No.</label>
                    <input type="number" class="form-control" name="phone_no" placeholder="Enter Phone No." required>
                    <div class="invalid-feedback">
                      Please Provide Your Company Phone No.
                    </div>
                  </div>
                  <div class="form-group col-lg-6">
                    <label>Mobile No. <span class="required">*</span></label>
                    <input type="number" class="form-control" name="mobile_no" placeholder="Enter Mobile No." required>
                    <div class="invalid-feedback">
                      Please Provide Your Company Mobile No.
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-8">
                    <label>Address <span class="required">*</span></label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                    <div class="invalid-feedback">
                      Please Provide Your Company Address.
                    </div>
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Status <span class="required">*</span></label>
                    <select class="form-control" name="status">
                      <option value="1" selected>Active</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <h4 style="margin: 0">Select a location!
                    <small style="margin: 0; float: right">Your current location is marked.</small>
                    </h3>
                    <p>Click on a location on the map to locate the branch. Drag the marker to change location.</p>
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
                    <label>Latitude <span class="required">*</span></label>
                    <input type="text" class="form-control" id="lat" name="latitude" placeholder="Enter Latitude"
                      readonly>
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Longitude <span class="required">*</span></label>
                    <input type="text" class="form-control" id="lng" name="longitude" placeholder="Enter Longitude"
                      readonly>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <div class="box-footer">
              <button type="submit" class="btn btn-success btn-sm">Create</button>
              <button type="reset" class="btn btn-warning btn-sm">Reset</button>
              <a href="{{ route('companies.index') }}" class="btn btn-danger btn-sm">Close</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('custom-scripts')
<script src="{{asset('public/dashboard/js/map.js')}}"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBHZKZUHrAPqBKGEXz75yXj8fC0hqbqPg&callback=getLocation">
</script>
<script>
  $(document).ready(function () {
        $('#userManage').addClass('active');
    });
</script>
@endpush