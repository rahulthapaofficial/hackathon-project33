@extends('layouts.master')

@push('page_title')
Create User
@endpush

@push('custom-styles')
<link rel="stylesheets" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
@endpush

@section('main-content')
<div class="main-content">
  <div class="breadcrumb">
    <h1>Dashboard</h1>
    <ul>
      <li><a href="href">Vehicles</a></li>
      <li>Create</li>
    </ul>
  </div>
  <div class="separator-breadcrumb border-top"></div>
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-body">
          <form action="{{ route('vehicles.store') }}" method="POST" role="form" class="needs-validation"
            novalidate="novalidate">
            @csrf
            {{-- <input type="text" name="company_id" value="{{ Auth }}"> --}}
            <div class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <label>Name <span class="required">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Vehicle Name" required>
                  <div class="invalid-feedback">
                    Please Provide Your Vehicle Name.
                  </div>
                </div>
                <div class="form-group">
                  <label>Category <span class="required">*</span></label>
                  <select name="vehicle_type_id" id="categoryId" class="form-control" required>
                    <option value="" class="selectVehicleBrand" disabled selected>Choose Category</option>
                    @foreach ($vehicletypes as $vehicletype)
                    <option value="{{ $vehicletype->id }}">{{ $vehicletype->name }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback">
                    Please Choose Your Vehicle Category Name.
                  </div>
                </div>
                <div class="form-group">
                  <label>Brand <span class="required">*</span></label>
                  <select name="brand_id" id="brandName" class="form-control" disabled required>
                    <option value="" class="selectVehicleBrand" disabled selected>Choose Brand</option>
                  </select>
                  <div class="invalid-feedback">
                    Please Choose Your Vehicle Brand Name.
                  </div>
                </div>
                <div class="form-group">
                  <label>Vehicle No. <span class="required">*</span></label>
                  <input type="text" class="form-control" name="vehicle_no" placeholder="Enter Vehicle No." required>
                  <div class="invalid-feedback">
                    Please Provide Your Vehicle No.
                  </div>
                </div>
                <div class="form-group">
                  <label>Color <span class="required">*</span></label>
                  <input type="text" class="form-control" name="color" placeholder="Enter Vehicle Color" required>
                  <div class="invalid-feedback">
                    Please Provide Your Vehicle Color.
                  </div>
                </div>
                <div class="form-group">
                  <label>Condition <span class="required">*</span></label>
                  <select class="form-control" name="condition">
                    <option value="1" selected>Good</option>
                    <option value="0">Average</option>
                  </select>
                  <div class="invalid-feedback">
                    Please Provide Your Vehicle Condition.
                  </div>
                </div>
                <div class="form-group">
                  <label>Status <span class="required">*</span></label>
                  <select class="form-control" name="status">
                    <option value="1" selected>Available</option>
                    <option value="0">Unavailable</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <h4 style="margin: 0">Upload Image
                    </h3>
                    <p>Please Upload Vehicle's Photo.</p>
                    <input type="file" name="image" id="">
                </div>
                <div class="form-group" style="background: #663399; height: 300px; opacity: 10%">
                </div>
              </div>
            </div>
            <hr />
            <div class="box-footer">
              <button type="submit" class="btn btn-success btn-sm">Create</button>
              <button type="reset" class="btn btn-warning btn-sm">Reset</button>
              <a href="{{ route('vehicles.index') }}" class="btn btn-danger btn-sm">Close</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('custom-scripts')
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBHZKZUHrAPqBKGEXz75yXj8fC0hqbqPg&callback=getLocation">
</script>
<script>
  $(document).ready(function () {
        $('#vehicleManage').addClass('active');

        $('#categoryId').change(function(){
        $(`#brandName`).html('<option value="" class="selectVehicleBrand" disabled selected>Choose Vehicle Brand</option>');
          let categoryId = $(this).val();
          let getBrandUrl = base_url + `/dashboard/vehicles/getBrandsById/${categoryId}`;
          
          $.ajax({
            method: 'GET',
            url: getBrandUrl,
          }).then(function(response){
            $(`#brandName`).prop('disabled', false);
            $.each(response, function(index, brand){
              $(`<option value="${brand.id}">${brand.name}</option>`).insertAfter(`#brandName .selectVehicleBrand`);
            });
          });
        });
    });
</script>
@endpush