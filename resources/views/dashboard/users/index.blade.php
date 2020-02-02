@extends('layouts.master')

@push('custom-styles')
<link rel="stylesheet" href="http://demos.ui-lib.com/gull/dist-assets/css/plugins/datatables.min.css" />
@endpush

@section('main-content')
<div class="main-content">
    <div class="breadcrumb">
        <h1>Dashboard</h1>
        <ul>
            <li><a href="">Users</a></li>
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
                            <h4 class="card-title mb-3">All Users</h4>
                        </div>
                        <div class="col-sm-2 text-white">
                            <a class="btn btn-primary btn-round btn-sm" style="float: right; margin-top: -5px"><i
                                    class="fa fa-plus"></i> Create New User</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" id="alternative_pagination_table"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Address</th>
                                    <th>Status</th>
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
        alert(base_url);
        $('#userManage').addClass('active');
        manageTable = $('#alternative_pagination_table').DataTable({
            'ajax': base_url + '/users/fetchUsers',
            'order': []
        });
    });
</script>
@endpush