@extends('website.layouts.master')
@section('title', 'Billing Information')
@section('style')
    <style>
        .form-group {
            margin-bottom: 0rem;
        }

        .form-check-input[type=checkbox] {
            border-radius: 0.25em;
            width: 17px;
            height: 16px;
        }
    </style>

@endsection

@section('content')



    <div class="container-fluid about-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="pt-5"><span class="product" style="color:#E7232B">Billing </span> <span style="color: black;"
                            class="header">Information</span></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card-billing">

            <div class="card-body">

                <div class="row">
                    <div class="col-md-8">
                        <div class="left border">
                            <div class="row">
                                <span class="header">Billing Information</span>

                            </div>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">First name</label>
                                        <input type="email" class="form-control" id="" placeholder="First name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Last name</label>
                                        <input type="text" class="form-control" id="" placeholder="Last name">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Company Name (optional)</label>
                                        <input type="password" class="form-control" id="inputPassword4"
                                            placeholder="Company Name (optional)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Street Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Country / Region</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Country / Region</option>
                                            <option>Country / Region</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>State</option>
                                            <option>State</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip" placeholder="Zip Code">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id=""
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Phone</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Phone number">
                                    </div>


                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="check1" name="option1"
                                            value="something" checked>
                                        <label class="form-check-label">Ship to a different address</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <h6 style="font-size:1.5rem">Additional Info</h6>
                                    <p style="font-size:14px">Order Notes (Optional)</p>
                                    <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="right border">
                            <div class="header mb-2">Order Summary</div>
                            @if (count(\Cart::getContent()) > 0)
                                @foreach (\Cart::getContent() as $item)
                                    <div class="row item">
                                        @php
                                            $img = $item->attributes->image;
                                        @endphp
                                        <div class="col-2 align-self-center"><img class="img-fluid"
                                                src="{{ asset($img) }}">
                                        </div>
                                        <div class="col-10 add">

                                            <div class="row text-muted">{{ $item->name }}</div>
                                            <div class="row text-muted ml-1">{{ $item->quantity }}</div>
                                            <div class="row text-muted ml-1"> <strong> ${{ $item->price }} </strong></div>
                                        </div>
                                    </div>
                                @endforeach
                                <hr>
                                <div class="row lower">
                                    <div class="col text-left">Subtotal</div>
                                    <div class="col text-right">$ {{ \Cart::getSubTotal() }}</div>
                                </div>
                                <div class="row lower">
                                    <div class="col text-left">Shipping: </div>
                                    <div class="col text-right">Free</div>
                                </div>
                                <div class="row lower">
                                    <div class="col text-left"><b>Total to pay</b></div>
                                    <div class="col text-right"><b>$ {{ \Cart::getTotal() }}</b></div>
                                </div>
                            @endif


                            <div class="row lower mt-3 ">
                                <h6 style="font-size:1.5rem">Payment Method</h6>
                                <div class="form-check formbilling">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1" checked onchange="changeButtonName(this)">
                                    <label class="form-check-label" for="flexRadioDefault1">Cash on Delivery</label>
                                </div>
                                <div class="form-check formbilling">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" onchange="changeButtonName(this)">
                                    <label class="form-check-label" for="flexRadioDefault2">Stripe</label>
                                </div>
                            </div>

                            <!-- Cash on Delivery button -->
                            <div class="container" id="cashOnDeliveryContainer">
                                <div class="card-billing">
                                    <div class="card-body">
                                        <!-- Order button for Cash on Delivery -->
                                        <div class="d-grid mx-auto mt-4">
                                            <button type="button" class="btn btn-lg" id="orderButton"
                                                onclick="handleOrder('cashOnDelivery')">Order Food</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stripe card field container -->
                            <div class="container" id="stripeCardContainer" style="display: none;">
                                <div class="card-billing">
                                    <div class="card-body">
                                        <!-- Your billing form goes here -->

                                        <!-- Element to mount the card -->
                                        <div id="card-element-container">
                                            <div id="card-element"></div>
                                        </div>

                                        <!-- Display any errors from Stripe -->
                                        <div id="card-errors" role="alert"></div>

                                        <!-- Order button for Stripe -->
                                        <div class="d-grid mx-auto mt-4">
                                            <button type="button" class="btn btn-lg" id="orderButton"
                                                onclick="handleOrder('stripe')">Order Food</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="faqsfooter">
        @include('website.includes.footer')
    </div>

@endsection

@section('script')

    <script src="https://js.stripe.com/v3/"></script>

    <script>
        // Function to decrement the value
        function decrementValue() {
            var counterElement = document.getElementById('counter');
            var currentValue = parseInt(counterElement.innerText);

            // Ensure the value does not go below 1
            if (currentValue > 1) {
                counterElement.innerText = currentValue - 1;
            }
        }

        // Function to increment the value
        function incrementValue() {
            var counterElement = document.getElementById('counter');
            var currentValue = parseInt(counterElement.innerText);

            // Increment the value
            counterElement.innerText = currentValue + 1;
        }
    </script>

    <script>
        var stripe = Stripe(
            'pk_test_51LKqZFGSNjIJ6i2QnlYxkoDkXMm5ClY7SPxPmd6uTCynsnTfiDItG92Brx3dR6ZbHGnBGAVtgJZ9OVXEXS1mKR0G00GrXSMXRn'
        );
        var elements = stripe.elements();
        var card = elements.create('card');

        function changeButtonName(radioButton) {
            var selectedLabel = radioButton.nextElementSibling.innerText;
            document.getElementById('orderButton').innerText = 'Order ' + selectedLabel;

            // Toggle visibility of the Cash on Delivery button
            var cashOnDeliveryContainer = document.getElementById('cashOnDeliveryContainer');
            cashOnDeliveryContainer.style.display = radioButton.id === 'flexRadioDefault1' ? 'block' : 'none';

            // Toggle visibility of the Stripe card field
            var stripeCardContainer = document.getElementById('stripeCardContainer');
            stripeCardContainer.style.display = radioButton.id === 'flexRadioDefault2' ? 'block' : 'none';

            // Mount or unmount the card element based on visibility
            if (stripeCardContainer.style.display === 'block') {
                card.mount('#card-element');
            } else {
                card.unmount();
            }
        }

        function handleOrder(paymentMethod) {
            if (paymentMethod === 'stripe') {
                // Fetch the client_secret from the server only if Stripe is selected
                fetch('{{ route('get-secret') }}')
                    .then(response => response.json())
                    .then(data => {
                        stripe.confirmCardPayment(data.client_secret, {
                            payment_method: {
                                card: card,
                                billing_details: {
                                    name: 'John Doe'
                                }
                            }
                        }).then(result => {
                            if (result.error) {
                                document.getElementById('card-errors').innerText = result.error.message;
                            } else {
                                console.log(result.paymentIntent);
                                // Redirect to success page for Stripe payment
                                console.log("stripe payment is success");
                            }
                        });
                    });
            } else {
                // Handle other payment methods (Cash on Delivery)
                console.log('Order placed with Cash on Delivery');
                // Redirect to success page for Cash on Delivery

            }
        }
    </script>
@endsection
