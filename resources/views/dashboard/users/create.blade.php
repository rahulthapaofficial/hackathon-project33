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
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">First name</label>
                                <input class="form-control" id="validationCustom01" type="text" placeholder="First name"
                                    value="Mark" required="required" />
                                <div class="valid-feedback">
                                    Looks good!

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Last name</label>
                                <input class="form-control" id="validationCustom02" type="text" placeholder="Last name"
                                    value="Otto" required="required" />
                                <div class="valid-feedback">
                                    Looks good!

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"
                                            id="inputGroupPrepend">@</span></div>
                                    <input class="form-control" id="validationCustomUsername" type="text"
                                        placeholder="Username" aria-describedby="inputGroupPrepend"
                                        required="required" />
                                    <div class="invalid-feedback">
                                        Please choose a username.

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">City</label>
                                <input class="form-control" id="validationCustom03" type="text" placeholder="City"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please provide a valid city.

                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">State</label>
                                <input class="form-control" id="validationCustom04" type="text" placeholder="State"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please provide a valid state.

                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Zip</label>
                                <input class="form-control" id="validationCustom05" type="text" placeholder="Zip"
                                    required="required" />
                                <div class="invalid-feedback">
                                    Please provide a valid zip.

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" id="invalidCheck" type="checkbox" required="required" />
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions

                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.

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