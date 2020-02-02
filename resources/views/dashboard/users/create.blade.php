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
                    <form class="needs-validation" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Company <span class="required">*</span></label>
                                <select class="form-control" id="validationCustom01" required>
                                    <option value="">Choose Company</option>
                                    @foreach ($companies as $company)
                                    <option data-name="{{ $company->name }}" value="{{ $company->id }}">
                                        {{ $company->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please Choose Any Company.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Role <span class="required">*</span></label>
                                <select class="form-control" id="validationCustom02" required>
                                    <option value="">Choose Role</option>
                                    @foreach ($roles as $role)
                                    <option data-name="{{ $role->name }}" value="{{ $role->id }}">{{ $role->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please Choose Any Role.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">First Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom03" type="text"
                                    placeholder="Enter Your Name" required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your First Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Last Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom04" type="text"
                                    placeholder="Enter Last Name" required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your Last Name.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom05">Email <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom05" type="email"
                                    placeholder="Enter Your Email" required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your Email Address.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom06">Phone No. <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom06" type="number"
                                    placeholder="Enter Phone No." required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your Phone No.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom07">Status <span class="required">*</span></label>
                                <select class="form-control" id="validationCustom07" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please Choose Any Company.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2 mb-3">
                                <label for="validationCustom08">Gender <span class="required">*</span></label>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="radio radio-primary">
                                            <input type="radio" name="gender" value="male"><span>Male</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="radio radio-primary">
                                            <input type="radio" name="gender" value="female"><span>Female</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="separator-breadcrumb border-top"></div>
                        <div class="pull-right">
                            <button class="btn btn-success" type="submit">Create</button>
                            <button class="btn btn-warning" type="reset">Reset</button>
                            <a class="btn btn-danger" href="{{ route('users.index') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-scripts')
<script>
    $(document).ready(function () {
        $('#userManage').addClass('active');
    });
</script>
@endpush