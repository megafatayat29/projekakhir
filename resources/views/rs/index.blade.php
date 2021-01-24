@extends('adminlte.master')

@push('scripts')
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize(){
            var mapProp = {
                center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("gMap"),mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endpush

@section('content')
    <div id="gMap" style="width:100%; height:640px;"></div>
@endsection

