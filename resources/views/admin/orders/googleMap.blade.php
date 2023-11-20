@extends('admin.layouts.master')
@section('title', 'WebRoute')
<style>
    #map {
        height: 400px;
        width: 100%;
        margin-top: 20px;
    }
    #location1,
    #location2 {
        border: 1px solid #ccc;
        padding: 8px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
    }

    #location1:focus,
    #location2:focus {
        border: 1px solid #555;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    #map {
        height: 300px; /* Adjust the height as needed */
        width: 100%;
        margin-top: 20px;
    }

    label,
    input,
    button,
    select {
        font-size: 16px;
    }
</style>
@section('body-section')
@auth
    <label for="location1">Location 1:</label>
    <select id="location1" placeholder="Enter location 1"></select>

    <label for="location2">Location 2:</label>
    <input type="text" id="location2" placeholder="Enter location 2">

    <button onclick="calculateRoute()">Show Route</button>

    <div id="map"></div>

    <label for="distance">Distance:</label>
    <input type="text" id="distance" readonly>

    <label for="time">Time:</label>
    <input type="text" id="time" readonly>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeeUZJDwiG1wIrvzJ2Lxmhn2zcoGPWXKQ&libraries=places"></script>

    <script>
        var map, directionsService, directionsRenderer;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 14
            });

            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);
        }

        function calculateRoute() {
            var start = document.getElementById('location1').value;
            var end = document.getElementById('location2').value;

            directionsService.route(
                {
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING
                },
                function (response, status) {
                    if (status === "OK") {
                        directionsRenderer.setDirections(response);

                        // Extract and display distance and duration
                        var distance = response.routes[0].legs[0].distance.text;
                        var duration = response.routes[0].legs[0].duration.text;

                        // Update HTML elements
                        document.getElementById('distance').value = distance;
                        document.getElementById('time').value = duration;
                    } else {
                        console.error("Directions request failed due to " + status);
                    }
                }
            );
        }

        // Initialize the map
        initMap();

        $(document).ready(function () {
            // Fetch locations and populate the dropdown
            $.ajax({
                url: '/get-locations',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    var location1Dropdown = $('#location1');
                    $.each(data, function (index, value) {
                        location1Dropdown.append('<option value="' + value + '">' + value + '</option>');
                    });
                },
                error: function (error) {
                    console.error('Error fetching locations:', error);
                }
            });
        });
    </script>
@endauth
@endsection
