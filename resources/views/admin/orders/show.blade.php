@extends('admin.layouts.master')

@section('title', "Order Detail")

@section('body-section')
<div class="content-body">
    <section class="card invoice-page">
        <div id="invoice-template" class="card-body">
            <div class="mb-4">
                <h2>Order Detail</h2>
                <p>ORDER NO.: {{ $order->order_number }}</p>
                <p>ORDER DATE: {{ $order->created_at }}</p>
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

        <div class="text-right">
             <button class="btn btn-primary" onclick="downloadInvoice()">Download Invoice</button>

                <button class="btn btn-success" onclick="redirectToGoogleMap()">Google Maps Route</button>

        </div>
    </section>
</div>

<!-- Include the necessary script for PDF download -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeeUZJDwiG1wIrvzJ2Lxmhn2zcoGPWXKQ&libraries=places"></script>

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
    function redirectToGoogleMap() {
        window.location.href = "{{ route('googleMap') }}";
    }
</script>

@endsection
