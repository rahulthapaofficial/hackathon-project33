@extends('layouts.master')

@push('custom-styles')
<link rel="stylesheet" href="http://demos.ui-lib.com/gull/dist-assets/css/plugins/datatables.min.css" />
@endpush
@push('custom-styles')
<style>
    #userTable table#dataTables tbody {
        text-align: center;
    }

    #userTable table#dataTables tbody tr td {
        vertical-align: middle;
    }
</style>
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
                    <div class="table-responsive" id="userTable">
                        <table class="display table table-striped table-bordered" id="dataTables" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Branch</th>
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Branch</th>
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
        $('#userManage').addClass('active');
        manageTable = $('#dataTables').DataTable({
            'ajax': base_url + '/dashboard/users/fetchUsers',
            'order': []
        });
        
        $(document).on('click', '.userStatusModifyBtn', function(){
            beforeAction('Updating User Status');
            let userId = $(this).data('id');
            let userStatus = $(this).data('value');
            let updateStatusUrl = `{{ url('dashboard/users/updatestatus/${userId}') }}`;
            
            $.ajax({
                method: 'PATCH',
                url: updateStatusUrl,
                data: {
                    user_status: userStatus
                },
            }).then(function(responseData){
                if(responseData == 1){
                    Toast.fire({
                        position: 'top-end',
                        type:'success',
                        title: 'User Activated Successfully.'
                    });
                }else{
                    Toast.fire({
                        position: 'top-end',
                        type:'error',
                        title: 'User Suspended Successfully.'
                    });
                }
                manageTable.ajax.reload(null, false);
            });
            afterAction();
        });
    });
</script>
@endpush