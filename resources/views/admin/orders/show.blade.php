@extends('admin.layouts.master')
@section('title',"Order Detail")
@section('style')
@endsection
@section('body-section')
<div class="content-body">
   <!-- invoice functionality start -->
  
   <!-- invoice functionality end -->
   <!-- invoice page -->
   <section class="card invoice-page">
      <div id="invoice-template" class="card-body">
         <!-- Invoice Company Details -->
         <div id="invoice-company-details" class="row">
            <div class="col-sm-6 col-12 text-left pt-1">
               <div class="media pt-1">
                  <img src="../../../app-assets/images/logo/logo.png" alt="company logo" />
               </div>
            </div>
            <div class="col-sm-6 col-12 text-right">
               <h1>Order Detail</h1>
               <div class="invoice-details mt-2">
                  <h6>ORDER NO.</h6>
                  <p>{{ $order->order_number }}</p>
                  <h6 class="mt-2">ORDER DATE</h6>
                  <p>{{ $order->created_at }}</p>
               </div>
            </div>
         </div>
         <!--/ Invoice Company Details -->
         <!-- Invoice Recipient Details -->
         <div id="invoice-customer-details" class="row pt-2">
            <div class="col-sm-6 col-12 text-left">
               <h5>Recipient</h5>
               <div class="recipient-info my-2">
                  <p> <i class="feather icon-user"></i>
                  {{ $order->users->name??null }} {{ $order->users->last_name??null }}</p>
                  <p>{{ $order->users->address??null }}</p>
                  <p>{{ $order->users->state??null }} {{ $order->users->city??null }}</p>
                  <p>{{ $order->users->zipcode??null }}</p>
               </div>
               <div class="recipient-contact pb-2">
                  <p>
                     <i class="feather icon-mail"></i>
                     {{ $order->users->email??null }}
                  </p>
                  <p>
                     <i class="feather icon-phone"></i>
                     +91 988 888 8888
                  </p>
               </div>
            </div>
            <div class="col-sm-6 col-12 text-right">
               <h5>Shipped</h5>
               <div class="company-info my-2">
                  <p>{{ $order->address }}</p>
                  <p>{{ $order->state }}, {{ $order->city }}</p>
                  <p>{{ $order->zip_code }}</p>
               </div>
               <div class="company-contact">
                  <p>
                     <i class="feather icon-mail"></i>
                     {{ $order->email }}
                  </p>
                  <p>
                     <i class="feather icon-phone"></i>
                     {{ $order->phone }}
                  </p>
               </div>
            </div>
         </div>
         <!--/ Invoice Recipient Details -->
         <!-- Invoice Items Details -->
         <div id="invoice-items-details" class="pt-1 invoice-items-table">
            <div class="row">
               <div class="table-responsive col-12">
                  <table class="table">
                     <thead>
                        <tr>
                           <th>PRODUCT NAME</th>
                           <th>AMOUNT</th>
                           <th>QUANTITY</th>
                           <th>Total</th>
                        </tr>
                     </thead>
                     <tbody>
                       @if(count($order->items)>0) 
                        @foreach($order->items as $item)
                        <tr>
                           <td>{{$item->products->name}}</td>
                           <td>{{$item->products->price??null}}</td>
                           <td>{{ $item->qty }}</td>
                           <td>{{ $item->qty  * $item->products->price}} USD</td>
                        </tr>
                        @endforeach
                        @endif
                        
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="invoice-total-details" class="invoice-total-table">
            <div class="row">
               <div class="col-7 offset-5">
                  <div class="table-responsive">
                     <table class="table table-borderless">
                        <tbody>
                           <tr>
                              <th>SUBTOTAL</th>
                              <td>{{ $order->subtotal}} USD</td>
                           </tr>
                           <tr>
                              <th>DISCOUNT (5%)</th>
                              <td>{{ $order->tax}} USD</td>
                           </tr>
                           <tr>
                              <th>TOTAL</th>
                              <td>{{ $order->total}} USD</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- Invoice Footer -->
        {{--  <div id="invoice-footer" class="text-right pt-3">
            <p>Transfer the amounts to the business amount below. Please include invoice number on your check.
            <p class="bank-details mb-0">
               <span class="mr-4">BANK: <strong>FTSBUS33</strong></span>
               <span>IBAN: <strong>G882-1111-2222-3333</strong></span>
            </p>
         </div>
         --}}
         <!--/ Invoice Footer -->
      </div>
   </section>
   <!-- invoice page end -->
</div>
@endsection
@section('script')
<script type="text/javascript">
   var APP_URL = {!! json_encode(url('/')) !!}
   
   
</script>
@endsection