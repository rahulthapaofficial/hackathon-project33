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
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">First Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom03" type="text" placeholder="Enter Your Name"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your First Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Last Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom04" type="text" placeholder="Enter Last Name"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your Last Name.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">First Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom03" type="text" placeholder="Enter Your Name"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your First Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Last Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom04" type="text" placeholder="Enter Last Name"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your Last Name.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">First Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom03" type="text" placeholder="Enter Your Name"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your First Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Last Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom04" type="text" placeholder="Enter Last Name"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your Last Name.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">First Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom03" type="text" placeholder="Enter Your Name"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your First Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Last Name <span class="required">*</span></label>
                                <input class="form-control" id="validationCustom04" type="text" placeholder="Enter Last Name"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please Enter Your Last Name.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
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