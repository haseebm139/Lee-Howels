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
                <form id="payment-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="left border">
                                <div class="row">
                                    <span class="header">Billing Information</span>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">First name</label>
                                        <input type="text" name="first_name" class="form-control" id=""
                                            placeholder="First name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Last name</label>
                                        <input type="text" name="last_name" class="form-control" id=""
                                            placeholder="Last name">
                                    </div>


                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Street Address</label>
                                    <input type="text" name="address" class="form-control" id="inputAddress"
                                        placeholder="1234 Main St">
                                </div>

                                {{-- <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="countryInput">City</label>
                                        <input id="countryInput" name="city" class="form-control"
                                            autocomplete="new-country">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="stateInput">State</label>
                                        <input id="stateInput" name="state" class="form-control" autocomplete="new-state">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="zipInput">Zip</label>
                                        <input id="zipInput" name="zipcode" type="text" class="form-control"
                                            placeholder="Zip Code">
                                    </div>
                                </div> --}}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="countryInput">City</label>
                                        <input id="countryInput" class="form-control" autocomplete="new-country" name="city">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="stateInput">State</label>
                                        <input id="stateInput" class="form-control" autocomplete="new-state" name="state">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="zipInput">Zip</label>
                                        <input id="zipInput" name="zipcode" type="text" class="form-control"
                                            placeholder="Zip Code">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id=""
                                            placeholder="Email Address" name="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Phone</label>
                                        <input type="text" class="form-control" id="" placeholder="Phone number"
                                            name="phone">
                                    </div>


                                </div>

                            </div>
                        </div>
                        @if (count(\Cart::getContent()) > 0)
                            <div class="col-md-4">
                                <div class="right border">
                                    <div class="header mb-2">Order Summary</div>
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
                                                <div class="row text-muted ml-1"> <strong> ${{ $item->price }} </strong>
                                                </div>
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
                                        <input type="hidden" name="amount" value="{{ \Cart::getTotal() }}">
                                    </div>



                                    <div class="row lower mt-3 ">
                                        <h6 style="font-size:1.5rem">Payment Method</h6>
                                        <div class="form-check formbilling">
                                            <input class="form-check-input" type="radio" name="payment_type"
                                                value="cod" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">Cash on
                                                Delivery</label>
                                        </div>
                                        <div class="form-check formbilling">
                                            <input class="form-check-input" type="radio" name="payment_type"
                                                value="stripe">
                                            <label class="form-check-label" for="flexRadioDefault2">Stripe</label>
                                        </div>
                                    </div>
                                    <!-- Stripe card elements -->
                                    <div id="card-element" style="display:none;" class="mt-5 ml-2">
                                        <!-- Additional fields for Stripe -->
                                        <label for="card_number">Card Number</label>
                                        <div id="card-number" class="field"></div>

                                        <label for="card_expiry">Card Expiry</label>
                                        <div id="card-expiry" class="field"></div>

                                        <label for="card_cvc">Card CVC</label>
                                        <div id="card-cvc" class="field"></div>
                                    </div>

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>



                                    <div class="container" id="cashOnDeliveryContainer">
                                        <div class="card-billing">
                                            <div class="card-body">
                                                <!-- Order button for Cash on Delivery -->
                                                <div class="d-grid mx-auto mt-4">
                                                    <button type="submit" class="btn btn-lg" id="orderButton">Order
                                                        Process</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="faqsfooter">
        @include('website.includes.footer')
    </div>

@endsection

@section('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeeUZJDwiG1wIrvzJ2Lxmhn2zcoGPWXKQ&libraries=places"></script>

    <script>
        $(document).ready(function() {
            const stripe = Stripe(
                'pk_test_51LKqZFGSNjIJ6i2QnlYxkoDkXMm5ClY7SPxPmd6uTCynsnTfiDItG92Brx3dR6ZbHGnBGAVtgJZ9OVXEXS1mKR0G00GrXSMXRn'
            );
            const form = $('#payment-form');

            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element');

            // Event listener for changing the payment method
            $('input[name="payment_type"]').change(function() {
                const selectedPaymentMethod = $('input[name="payment_type"]:checked').val();
                const stripeElementContainer = $('#card-element');

                if (selectedPaymentMethod === 'stripe') {
                    stripeElementContainer.show();
                } else {
                    stripeElementContainer.hide();
                }
            });

            // Event listener for form submission
            form.submit(async function(e) {
                e.preventDefault();

                const paymentMethod = $('input[name="payment_type"]:checked').val();

                if (paymentMethod === 'stripe') {
                    const {
                        token,
                        error
                    } = await stripe.createToken(cardElement);

                    if (error) {
                        console.error(error);
                    } else {
                        // Append the Stripe token to the form data
                        form.append($('<input type="hidden" name="stripeToken" />').val(token.id));

                        // Make an AJAX request to process the payment on the server
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('checkout.process') }}',
                            data: form
                                .serialize(), // Serialize form data including the Stripe token
                            success: function(response) {
                                if (response.type === 'success') {
                                    toastr.success(response.message);
                                    window.location.href =
                                        "{{ route('index') }}"; // or perform any other success action
                                } else {
                                    toastr.error(response
                                        .message); // or perform any other error action
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                            }
                        });
                    }
                } else {
                    // Handle COD payment
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('checkout.process') }}',
                        data: form.serialize(),
                        success: function(response) {
                            if (response.type === 'success') {
                                toastr.success(response.message);
                                window.location.href =
                                    "{{ route('index') }}"; // or perform any other success action
                            } else {
                                toastr.error(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });
    </script>
    <script>
        function initializeAutocomplete() {
            var countryInput = document.getElementById('countryInput');
            var stateInput = document.getElementById('stateInput');
            var zipInput = document.getElementById('zipInput');

            var options = {
                types: ['geocode'], // Restrict results to addresses
            };

            var countryAutocomplete = new google.maps.places.Autocomplete(countryInput, options);
            var stateAutocomplete = new google.maps.places.Autocomplete(stateInput, options);

            // You can add more options and event listeners if needed

            // Example event listener for getting the selected place
            countryAutocomplete.addListener('place_changed', function () {
                var place = countryAutocomplete.getPlace();
                console.log(place);
            });
        }

        google.maps.event.addDomListener(window, 'load', initializeAutocomplete);
    </script>
    {{-- <script src="https://js.stripe.com/v3/"></script>

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
                            payment_type: {
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
    </script> --}}
@endsection
