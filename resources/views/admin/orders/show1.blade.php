@extends('admin.layouts.master')

@section('title', "Order Detail")

@section('body-section')
<div class="content-body">

    <section class="card invoice-page">
        @can('order-time-slot')
        <div class="text-right m-5"> 
                 
            <button class="btn btn-info" data-toggle="modal" data-target="#addTimeSlotModal">Add Time Slot</button>
                  
        </div>
        @endcan
        <div id="invoice-template" class="card-body">
            <div class="mb-4">
                <h2>Order Detail</h2>
                <p>ORDER NO.: {{ $order->order_number }}</p>
                <!--<p>ORDER DATE: {{ $order->created_at }}</p>-->
            <p>ORDER DATE: <strong>{{ \Carbon\Carbon::parse($order->created_at)->format('m-d-Y') }}</strong> ({{ \Carbon\Carbon::parse($order->created_at)->format('D') }})</p>
            <p>ORDER Time: <strong>{{ \Carbon\Carbon::parse($order->created_at)->format('h:i a') }}</strong></p>
            <p>DELIVERY Date: <strong>{{ \Carbon\Carbon::parse($order->delivery_time)->format('m-d-Y') }}</strong> ({{ \Carbon\Carbon::parse($order->delivery_time)->format('D') }})</p>
            <p>DELIVERY Time: <strong>{{ \Carbon\Carbon::parse($order->delivery_time)->format('h:i a') }}</strong></p>
            </div>

            <div class="mb-4">
                <h5>Details</h5>
                <p><strong>Shipped</strong>: {{ $order->address }}, {{ $order->state }}, {{ $order->city }}, {{ $order->zip_code }}</p>
                <p><strong>Email</strong>: {{ $order->email }}</p>
                <p><strong>Phone</strong>: {{ $order->phone }}</p>
                <p><strong>Recipient</strong>: {{ $order->full_name }}</p>
                <p><strong>Recipient Address</strong>: {{ $order->address }}, {{ $order->state }} {{ $order->city }}, {{ $order->zipcode }}</p>
                <p><strong>Recipient Email</strong>: {{ $order->users->email ?? null }}</p>
                <p><strong>Recipient Phone</strong>: +91 988 888 8888</p>
            </div>

            <div class="invoice-items-table mb-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>PRODUCT NAME</th>
                            <th>AMOUNT</th>
                            <th>QUANTITY</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->items as $item)
                            <tr>
                                @php
                                    $name = $item->products->name ?? $item->customize_product->title;
                                    $price = $item->products->price ?? $item->customize_product->price;
                                @endphp
                                <td>{{ $name }}</td>
                                <td>{{ $price ?? null }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->qty * $price }} USD</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="invoice-total-table mb-4">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td><strong>SUBTOTAL</strong></td>
                            <td>{{ $order->subtotal }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>DISCOUNT (5%)</strong></td>
                            <td>{{ $order->tax }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <td>{{ $order->total }} USD</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-right m-5">
            <button class="btn btn-primary" onclick="downloadInvoice()">Download Invoice</button>

            <a class="btn btn-success" href="{{ route('googleMap',$order->id) }}">Google Maps Route</a>
                 
            
                  
        </div>
          <div class="modal fade" id="addTimeSlotModal" tabindex="-1" role="dialog"
                aria-labelledby="addTimeSlotModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addTimeSlotModalLabel">Add Time Slot</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('orders.update', $order->id) }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="modal-body">
                                <!-- Add form or input fields for adding time slot here -->
                                <!-- For example: -->
                                <label for="timeSlot">Time Slot:</label>
                                <input type="text" id="timeSlot" name="timeSlot" class="form-control"
                                    placeholder="Select Date and Time">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Time Slot</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>
</div>

<!-- Include the necessary script for PDF download -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeeUZJDwiG1wIrvzJ2Lxmhn2zcoGPWXKQ&libraries=places"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


<!-- Initialize flatpickr for the time slot input field -->
<script>
    flatpickr("#timeSlot", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true,
        minuteIncrement: 1,
        minDate: "today",
        defaultDate: "today",
    });
</script>
<!-- Add script to handle PDF download -->
<script>
    function downloadInvoice() {
         // Target the invoice template element
         const element = document.getElementById('invoice-template');

         // Use html2pdf library to generate PDF
        html2pdf(element, {
             margin: 10,
             filename: 'invoice.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
             pagebreak: { mode: 'avoid-all' }
         });
     }
    document.getElementById('googleMapsRoute').addEventListener('click', function () {
        openGoogleMapsRoute();
    });

    function openGoogleMapsRoute() {
        const recipientAddress = "{{ $order->address }}, {{ $order->state }} {{ $order->city }}, {{ $order->zipcode }}";
        const mapsUrl = `https://www.google.com/maps/dir/?api=1&destination=${encodeURIComponent(recipientAddress)}`;
        window.open(mapsUrl, '_blank');
    }

</script>
<script>
    
</script>
<script>
    function saveTimeSlot() {
        // Add logic to save the time slot
        const timeSlot = document.getElementById('timeSlot').value;

        // Example: You can make an AJAX request to save the time slot
        // Replace this with your actual logic to save the time slot
        // For example: $.post('/save-time-slot', { timeSlot: timeSlot }, function(response) {});

        // Close the modal after saving
        $('#addTimeSlotModal').modal('hide');
    }
</script>
@endsection