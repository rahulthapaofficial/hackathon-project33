<div class="search-ui">
    <div class="search-header">
        <img src="{{ asset('public/dashboard/img/profile.png') }}" alt="" class="logo" style="margin: 0 10px 10px 0">
        <span style="font-size: 15px">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} - </span>
        <span style="font-weight: bold; font-size: 15px">{{ Auth::user()->getRoleNames()[0] }}</span>
        <button class="search-close btn btn-icon bg-transparent float-right mt-2">
            <i class="fa fa-close text-22 text-primary"></i>
        </button>
    </div>
    <div class="row">
        <table style="width:100%">
            <thead style="text-align: center">
                <th>
                    <input type="text" name="from" placeholder="From" class="form-control" autofocus>
                </th>
                <th>To</th>
                <th>
                    <input type="text" name="destination" placeholder="Destination" class="form-control">
                </th>
                <th>
                    <a class="btn btn-primary text-white"> Let&apos;s Go</a>
                </th>
            </thead>
        </table>
        {{-- <div class="col-sm-5">
            <input type="text" placeholder="From" class="form-control" autofocus>
        </div>
        <div class="col-sm-1">
            TO
        </div>
        <div class="col-sm-5">
            <input type="text" placeholder="Destination" class="form-control" autofocus>
        </div> --}}
    </div>
    <div class="search-title">
        <span class="text-muted">Search results</span>
    </div>
    <div class="search-results list-horizontal">
        <div class="list-item col-md-12 p-0">
            <div class="card o-hidden flex-row mb-4 d-flex">

            </div>
        </div>
    </div>
</div>