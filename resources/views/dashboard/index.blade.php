@extends('layouts.master')

@push('page_title')
Dashboard
@endpush

@section('main-content')
<div class="main-content">
    <div class="breadcrumb">
        <h1 class="mr-2">Version 1</h1>
        <ul>
            <li><a href="">Dashboard</a></li>
            <li>Version 1</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <!-- ICON BG-->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Add-User"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">New Leads</p>
                        <p class="text-primary text-24 line-height-1 mb-2">205</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Financial"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Sales</p>
                        <p class="text-primary text-24 line-height-1 mb-2">$4021</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Checkout-Basket"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Orders</p>
                        <p class="text-primary text-24 line-height-1 mb-2">80</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Money-2"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Expense</p>
                        <p class="text-primary text-24 line-height-1 mb-2">$1200</p>
                    </div>
                </div>
            </div>
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