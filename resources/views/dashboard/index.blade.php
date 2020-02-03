@extends('layouts.master')

@push('page_title')
Dashboard
@endpush

@section('main-content')
<div class="main-content">
    <div class="breadcrumb">
        <h1 class="mr-2">Dashboard</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="{{ route('users.index') }}">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-primary mt-2 mb-2">Total Users</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $countUsers }}</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="{{ route('companies.index') }}">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-primary mt-2 mb-2">Total Active Companies</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $countActiveCompanies }}</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="{{ route('vehicles.index') }}">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-primary mt-2 mb-2">Total Available Vehicles</p>
                        <p class="text-primary text-24 line-height-1 m-0">{{ $countAvailableVehicles }}</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">ALL ACTIVE COMPANIES</div>
                    <style>
                        #map {
                            height: 300px;
                            width: 100%;
                        }

                        #map:hover {
                            box-shadow: 0 0 1px 1px;
                        }
                    </style>
                    <div id="map"></div>
                    <script>
                        function getLocation() {
                            navigator.geolocation.getCurrentPosition(showPosition);
                        }

                        function showPosition(position) {
                            var lati = position.coords.latitude;
                            var long = position.coords.longitude;
                            initMap(lati,long);
                        }

                        function initMap(lati,long) {
                            var map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 8,
                                center: { lat: lati, lng: long}
                            });
                            @foreach($companiesMaps as $key => $companiesMap)
                                var contentString = `{{ $companiesMap->name }}`;
                                var companies = [{ lat: {{ $companiesMap->latitude }}, lng: {{ $companiesMap->longitude }}}];
                                companies.forEach(fetchCoords);
                            @endforeach

                            function fetchCoords(item, index) {
                                addMaker(item);
                            }

                            function addMaker(coords){
                                var marker = new google.maps.Marker({
                                    position: coords,
                                    map: map,
                                    animation: google.maps.Animation.DROP
                                });
                                
                                var infowindow = new google.maps.InfoWindow({
                                    content: contentString
                                });

                                marker.addListener('click', function() {
                                    infowindow.open(map, marker);
                                });
                            }
                        }
                    </script>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBHZKZUHrAPqBKGEXz75yXj8fC0hqbqPg&callback=getLocation">
                    </script>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">AVAILABLE VEHICLES</div>
                    <div style="height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
<script>
    $(document).ready(function () {
        $('#dashboardManage').addClass('active');
    });
</script>
@endpush