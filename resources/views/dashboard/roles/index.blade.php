@extends('layouts.master')

@push('page_title')
Roles
@endpush

@section('main-content')
<div class="main-content">
    <div class="breadcrumb">
        <h1>Dashboard</h1>
        <ul>
            <li><a href="">Roles</a></li>
            <li>All</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row mb-4">
        <div class="col-md-12 mb-3">
            <div class="card text-left">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <h4 class="card-title mb-3">Roles</h4>
                        </div>
                        <div class="col-sm-2 text-white">
                            <a class="btn btn-primary btn-round btn-sm" style="float: right; margin-top: -5px"><i class="fa fa-plus"></i> Create New Role</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">S.N.</th>
                                    <th scope="col">Role Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 20%">1</th>
                                    <td>Smith Doe</td>
                                    <td style="width: 20%">
                                        <a class="btn btn-primary text-white"><i class="fa fa-edit"></i>
                                            Modify</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection