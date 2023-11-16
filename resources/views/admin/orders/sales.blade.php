@extends('admin.layouts.master')
@section('title',"Orders")
@section('style')
<style>
    #map{
        position: static !important;
    }
</style>
@endsection

@section('body-section')
    <br>
    <section id="dashboard-analytics">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                       
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>Total Order</th>
                                        <th>Date</th>
                                        <th>Quantity</th>
                                        <th>Tax</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>

                                @forelse ($orders as $key => $item)
                                    <tr>
                                        <td>{{ $item->order_count }}</td>
                                        <td>{{ $item->order_date }}</td>
                                        <td>{{ $item->qty_count }}</td>
                                        <td>{{ $item->tax }}</td>
                                        <td>{{ $item->total }}</td>
                                         <td>
                                         <button type="button" class="btn btn-primary waves-effect waves-light" data-date="{{$item->order_date}}" data-bs-toggle="modal" > Show </button>
                                                 
                                        </td>
                                      
                                    </tr>
                                @empty
                                @endforelse
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-pricing" >
    <div class="modal-content p-2 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Pricing Plans -->
        <!-- <div class="pb-sm-5 pb-2 rounded-top"> -->
          <h2 class="text-center mb-2">Google Map</h2>
         
          
          <div id="map" style="height:100%;width:100%"></div>
          <div class="row mx-0 gy-3"></div>
        <!-- </div> -->
        <!--/ Pricing Plans -->
      </div>
    </div>
  </div>
</div>
@endsection




@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAME5dINf-cMU-QbH4Y_63o1UJBmEYhsTI&libraries=geometry&callback=initMap"
async defer></script>
    

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}

        var infoWindow; 
        var polygon;
        //Loading google maps with center and zoom level defined
        function initMap(data) {
        var map = new google.maps.Map(document.getElementById('map'), 
        {
            center: {lat: 24.8576831, lng: 67.0456147},
            zoom: 14,
        });
        
       
        polyCoords = [];
        for(i = 0;i<data.length;i++)
        {
            polyCoords.push({ lat: parseFloat(data[i].lat), lng: parseFloat(data[i].lng) });
            
           
           
        }
        console.log(polyCoords);
        // var polyCoords = 
        // [
        //     {lat: 33.708528, lng: 73.049979},
        //     {lat: 33.717109, lng: 73.042264},
        //     {lat:33.721320,  lng: 73.051105},
        //     {lat: 33.721097, lng: 73.057192},
        //     {lat: 33.717581, lng: 73.070854}
        //     // data[0];
        //     ];
        //      console.log(polyCoords);
        // defining the parameters of the animated marker 
        var marker = new google.maps.Marker({
            map: map,
            draggable: true,
            paths: polyCoords,
            editable: true,
            animation: google.maps.Animation.DROP,
            position: {lat: 24.8576831,  lng:  67.0456147}
        });
        // setting the visibility of the geofence/polygon for demo purposes
        polygon = new google.maps.Polygon({
            paths: polyCoords,
            strokeColor: '#E033FF',
            draggable:true,
            editable: true,
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#E033FF',
            fillOpacity: 0.35
        });
        // setting map and marker on the map
        marker.setMap(map);
        polygon.setMap(map);
        //giving the geofence the bounds the area set for it
        var geofence = new google.maps.Polygon({paths: polyCoords});
        
            
        map.addListener('click', function(e) {
            animatedMove(marker, 0.5 , marker.position, e.latLng);
        //defining the event listener for the movement of the marker
            google.maps.event.addListener(marker, 'dragend', function(e) 
        
        { 
            //animatedMove(marker, 0.5 , marker.position, e.latLng);
            // Set the info window's content and position.
            
            var contentString = '<b>Marker moving inside geofence.</b><br>' +
            'New Position Lat Long: ' + marker.position.lat() + ', ' + marker.position.lng();
        
            var contentString1 = '<b>Marker moving outside fence.</b><br>'+
            'New Position Lat Long: ' + marker.position.lat() + ', ' + marker.position.lng();
            //storing the result of the markers coordinates w.r.t color and symbol
            var resultColor =
            google.maps.geometry.poly.containsLocation(e.latLng, geofence) ?
            'blue':'red';
            
            var resultPath =
            google.maps.geometry.poly.containsLocation(e.latLng, geofence) ? "m 0 -1 l 1 2 -2 0 z":google.maps.SymbolPath.CIRCLE;
            
            //setting the infoWindow for displaying messages
            var infowindow = new google.maps.InfoWindow({content: contentString});
            var infowindow1 = new google.maps.InfoWindow({content:contentString1});
            
            console.log("I am here")
            // setting the condition for info window pop up
            if (resultPath!=false){       
                  infowindow.open(map, marker);    		      
                }
            else 
                infowindow1.open(map, marker);
            // setting the symbols parameters
            
            console.log("I am here")
        });
            new google.maps.Marker({
            position: e.latLng,
            map: map,
            icon: {
                path: resultPath,
                fillColor: resultColor,
                fillOpacity: 0.2,
                strokeColor: 'white',
                strokeWeight: 0.2,
                scale: 10
            }
            });
        });
        
        }
        function animatedMove(marker, t, current, moveto) {
        var lat = current.lat();
        var lng = current.lng();

        var deltalat = (moveto.lat() - current.lat()) / 100;
        var deltalng = (moveto.lng() - current.lng()) / 100;

        var delay = 10 * t;
        for (var i = 0; i < 100; i++) {
            (function(ind) {
            setTimeout(
                function() {
                var lat = marker.position.lat();
                var lng = marker.position.lng();
                lat += deltalat;
                lng += deltalng;
                latlng = new google.maps.LatLng(lat, lng);
                marker.setPosition(latlng);
                }, delay * ind
            );
            })(i)
        }
        }
       $(".waves-light").click(function(){
        var date = $(this).attr('data-date');
        $.ajax({
                url: "{{ route('show-map') }}",
                type: 'GET',
                /*dataType: 'json',*/
                data: {
                    'date': date,
                    
                },
                success: function(response) {
                    // console.log(response);
                    initMap(response);
                    $('#pricingModal').modal('show');
                    $("#map").css("position",'none')
                },
                error: function(error) {
                    toastr.error("Some error occured!");
                }
            });
        
       })
       
    </script>
@endsection
