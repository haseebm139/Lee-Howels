@extends('admin.layouts.master')

@section('title', "Order Detail")

@section('body-section')
    <style>
        .bgimg{

        background-image: url("{{ asset('app-assets/images/logo/invshape.png') }}");
        background-repeat: no-repeat;
        background-size: cover;
        height: 100px;
        position: absolute;

        right: 0;
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .bginv {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    img.w-50 {
        width: 37% !important;
    }

    h1.d-flex.justify-content-center.align-items-center.p-2 {
        color: white;
        font-family: system-ui;
        font-size: 30px;
        font-weight: 800;

    }


    .firstable td {
        font-size: 16px;
        font-weight: 600;
    }
    .table>thead {
        vertical-align: bottom;
        border-bottom: 4px solid;
    }

    td.item-desc {
        font-size: 17px;
    }
   .forfont {
        font-size: 17px;
        font-weight: 700;
        color: #646464;
    }

    .parent-div {
        display: flex;
        justify-content: space-between;
        font-size: 17px;
        font-weight: bold;
    }


    .table {

        margin-bottom: 0rem;

    }
    .col-md-6.logo {
            text-align: center;
        }

    @media screen and (min-device-width: 1439px) and (max-device-width: 1700px) {

        .bgimg {

            width: 100%;

        }
        h1.d-flex.justify-content-center.align-items-center.p-2 {

            font-size: 20px;

        }

    }
    @media screen and (min-device-width: 768px) and (max-device-width: 1023px) {

        .bgimg {

            width: 100%;

        }
        h1.d-flex.justify-content-center.align-items-center.p-2 {

            font-size: 20px;

        }

    }



    @media screen and (min-device-width: 101px) and (max-device-width: 767px) {

        .bgimg{
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 100%;
        }

        h1.d-flex.justify-content-center.align-items-center.p-2 {
            font-size: 20px;
         }

         .bginv {
          padding: 0;
        }

        .col-md-6.logo {
            text-align: center;
        }
    }
    </style>

    @if(isset($order))
        @can('order-time-slot')
        <div class="text-right m-5">

            <button class="btn btn-info" data-toggle="modal" data-target="#addTimeSlotModal">Add Time Slot</button>

        </div>
        @endcan
        <div id="invoice-template">

            <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-6 logo">
                    <img src="{{ asset('app-assets/images/logo/vuexy-logo-invoice.png') }}" class="w-50" srcset="">
                </div>

                <div class="col-md-6 bginv">

                    <div class="bgimg">
                      <h1 class="d-flex justify-content-center align-items-center p-2"><i> INVOICE {{ $order->order_number }}</i></h1>
                    </div>

                </div>
             </div>
            </div>
            <div class="container-fluid">
                <div class="row">

            <div class="col-md-8"></div>
            <div class="col-md-4">

              <table class="table table-borderless">

                <tbody>
                  <tr>
                    <th></th>
                    <th scope="row">Invoice </th>
                    <th scope="row">:{{ $order->order_number??'' }}</th>

                  </tr>



                  <tr>
                    <th></th>
                    <th scope="row">ORDER DATE</th>
                    <th scope="row">: {{ \Carbon\Carbon::parse($order->created_at)->format('m-d-Y') }} ({{ \Carbon\Carbon::parse($order->created_at)->format('D') }}) {{ \Carbon\Carbon::parse($order->created_at)->format('h:i a') }}</th>

                  </tr>

                  <tr>
                    <th></th>
                    <th scope="row">DELIVERY Date</th>
                    <th scope="row">: {{ \Carbon\Carbon::parse($order->delivery_time)->format('m-d-Y') }} ({{ \Carbon\Carbon::parse($order->delivery_time)->format('D') }}) {{ \Carbon\Carbon::parse($order->delivery_time)->format('h:i a') }}</th>

                  </tr>



                </tbody>
              </table>

            </div>
          </div>
            </div>
            <div class="container">
                <p style="border-bottom: 7px solid #000000; padding-top: 20px; "></p>
            </div>
            <div class="container mt-5">
                <div class="table-responsive">
                    <table class="table table-borderless">

                <tr>
                  <th scope="col"><u> Bill to: </u></th>
                  <th scope="col " style="width: 25%;">Name</th>
                  <th scope="col">Recipient Phone and Email</th>
                  <th scope="col">Recipient Address</th>
                </tr>


                <tr class="firstable">
                  <th scope="row"></th>
                  <td>{{ $order->first_name??'' }} {{ $order->last_name??'' }}</td>
                  <td>P: {{ $order->phone??'' }}</td>
                  <td>P: {{ $order->address }}, {{ $order->state }} {{ $order->city }}, {{ $order->zipcode }}</td>
                </tr>
                <tr class="firstable">
                  <th scope="row"></th>
                  <td></td>
                  <td>e:{{ $order->email??'' }}</td>

                </tr>


            </table>
                </div>
            </div>
            <div class="container mt-5">
                <div class="table-responsive">
                    <table class="table">
            <thead>
              <tr>
                <th scope="col " class="text-uppercase" style="width:65%">Item </th>
                <th scope="col" class="text-uppercase text-center">Unit Price</th>
                <th scope="col" class="text-uppercase text-center">qty</th>
                <th scope="col" class="text-uppercase text-center">amount</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($order->items as $item)
                    @php
                        $name = $item->products->name ?? $item->customize_product->title;
                        $price = $item->products->price ?? $item->customize_product->price;
                    @endphp
                    <tr>
                        <td  class="item-desc">{{ $name }}</td>
                        <td class="text-center forfont">${{ $price ?? null }}</td>
                        <td class="text-center forfont">{{ $item->qty }}</td>
                        <td class="text-center forfont">${{ $item->qty * $price }}</td>
                    </tr>
                @endforeach




              <tr style="border-bottom: transparent;">
               <td></td>
               <td colspan="3"><p style="border-bottom: 4px solid #000000; "></p></td>
              </tr>
             </tbody>
          </table>
                </div>
            </div>
            <div class="container">
            <div class="row">
            <div class="col-md-9"></div>

            <div class="col-md-3">
             <table class="table table-borderless">

              <tbody>
                <tr>

                  <td class="text-end forfont">SubTotal : </td>
                  <td></td>
                  <td class="text-center forfont" >${{ $order->subtotal??'' }}</td>

                </tr>
                <!--<tr>-->

                <!--  <td class="text-end forfont">Tax(10%) : </td>-->
                <!--  <td></td>-->
                <!--  <td class="text-center forfont" >${{ $order->subtotal*0.10 }}</td>-->

                <!--</tr>-->
                <tr>

                  <td class="text-end forfont">Total : </td>
                  <td></td>
                  <td class="text-center forfont" >${{ $order->total??'' }}</td>
                </tr>
              </tbody>
            </table>



        </div>
      </div>
      </div>

        </div>
            <div class="text-right m-5">
            <!--<button class="btn btn-primary" onclick="downloadInvoice()">Download Invoice</button>-->

            <a class="btn btn-success" href="{{ route('print.order',$order->id) }}">Download Invoice </a>
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
    @endif
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
            image: { type: 'jpeg', quality: 1 },
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
