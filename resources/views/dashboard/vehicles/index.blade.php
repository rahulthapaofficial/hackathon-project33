@extends('layouts.master')

@push('page_title')
Companies
@endpush

@push('custom-styles')
<link rel="stylesheet" href="https://demos.ui-lib.com/gull/dist-assets/css/plugins/datatables.min.css" />
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
            <li><a href="">Vehicles</a></li>
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
                            <h4 class="card-title mb-3">All Vehicles</h4>
                        </div>
                        <div class="col-sm-2 text-white">
                            <a href="{{ route('vehicles.create') }}" class="btn btn-outline-primary btn-sm"
                                style="float: right; margin-top: -5px"><i class="fa fa-plus"></i> Add New Vehicle</a>
                        </div>
                    </div>
                    <div class="table-responsive" id="userTable">
                        <table class="display table table-striped table-bordered" id="dataTables" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%">S.N</td>
                                    <th scope="col" class="text-left">Name</td>
                                    <th scope="col" class="text-left">Reg No.</td>
                                    <th scope="col" class="text-left">Email</td>
                                    <th scope="col" class="text-left">Phone No.</td>
                                    <th scope="col" class="text-left">Address</td>
                                    <th scope="col" style="width: 8%;">Status</th>
                                    <th scope="col" style="width: 15%;">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col" style="width: 5%">S.N</td>
                                    <th scope="col" class="text-left">Name</td>
                                    <th scope="col" class="text-left">Reg No.</td>
                                    <th scope="col" class="text-left">Email</td>
                                    <th scope="col" class="text-left">Phone No.</td>
                                    <th scope="col" class="text-left">Address</td>
                                    <th scope="col" style="width: 8%;">Status</th>
                                    <th scope="col" style="width: 15%;">Action</th>
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
<script src="https://demos.ui-lib.com/gull/dist-assets/js/plugins/datatables.min.js"></script>
<script src="https://demos.ui-lib.com/gull/dist-assets/js/scripts/datatables.script.min.js"></script>
<script>
    $(document).ready(function () {
        $('#vehicleManage').addClass('active');
        manageTable = $('#dataTables').DataTable({
            'ajax': base_url + '/dashboard/vehicles/fetchVehicles',
            'order': []
        });
        
        $(document).on('click', '.vehicleStatusModifyBtn', function(){
            beforeAction('Updating Company Status');
            let vehicleId = $(this).data('id');
            let vehicleStatus = $(this).data('value');
            let updateStatusUrl = `{{ url('dashboard/vehicles/updatestatus/${vehicleId}') }}`;
            
            $.ajax({
                method: 'PATCH',
                url: updateStatusUrl,
                data: {
                    vehicle_status: vehicleStatus
                },
            }).then(function(responseData){
                if(responseData == 1){
                    Toast.fire({
                        position: 'top-end',
                        type:'success',
                        title: 'Vehicle Activated Successfully.'
                    });
                }else{
                    Toast.fire({
                        position: 'top-end',
                        type:'error',
                        title: 'Vehicle Suspended Successfully.'
                    });
                }
                manageTable.ajax.reload(null, false);
            });
            afterAction();
        });
    });
</script>
@endpush