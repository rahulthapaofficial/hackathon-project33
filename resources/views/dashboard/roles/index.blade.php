@extends('layouts.master')

@push('custom-styles')
<link rel="stylesheet" href="http://demos.ui-lib.com/gull/dist-assets/css/plugins/datatables.min.css" />
@endpush
@push('custom-styles')
<style>

</style>
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
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <h4 class="card-title mb-3">All Roles</h4>
                        </div>
                        <div class="col-sm-2 text-white">
                            <a href="{{ route('roles.create') }}" class="btn btn-outline-primary btn-sm"
                                style="float: right; margin-top: -5px"><i class="fa fa-plus"></i> Create New Role</a>
                        </div>
                    </div>
                    <div class="table-responsive" id="roleTable">
                        <table class="display table table-striped table-bordered" id="dataTables" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
<script src="http://demos.ui-lib.com/gull/dist-assets/js/plugins/datatables.min.js"></script>
<script src="http://demos.ui-lib.com/gull/dist-assets/js/scripts/datatables.script.min.js"></script>
<script>
    $(document).ready(function () {
        $('#roleManage').addClass('active');
        manageTable = $('#dataTables').DataTable({
            'ajax': base_url + '/dashboard/roles/fetchRoles',
            'order': []
        });
    });
</script>
@endpush