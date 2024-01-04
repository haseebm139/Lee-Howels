<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src='https://netdna.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js'></script>

 

   
    <style>
        .bgimg{ 
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
    <title>Order Invoice</title>
  </head>
  <body>
    <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-6 logo">
                    <img src="{{ asset('app-assets/images/logo/vuexy-logo.png') }}" class="w-50" srcset="">
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
             <div class="container">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tbody>
                            
                          <tr>
                            <th></th>
                            <th scope="row">Invoice&nbsp;&nbsp;:&nbsp;{{ $order->order_number??'' }}</th>
                             
                          
                          </tr>
                
                          
                          
                          <tr>
                            <th></th> 
                            <th scope="row">ORDER DATE&nbsp;&nbsp;:&nbsp;{{ \Carbon\Carbon::parse($order->created_at)->format('m-d-Y') }} ({{ \Carbon\Carbon::parse($order->created_at)->format('D') }}) {{ \Carbon\Carbon::parse($order->created_at)->format('h:i a') }}</th>
                          
                          </tr>
                
                          <tr>
                            <th></th> 
                            <th scope="row">DELIVERY Date&nbsp;&nbsp;:&nbsp;{{ \Carbon\Carbon::parse($order->delivery_time)->format('m-d-Y') }} ({{ \Carbon\Carbon::parse($order->delivery_time)->format('D') }}) {{ \Carbon\Carbon::parse($order->delivery_time)->format('h:i a') }}</th>
                          
                          </tr>
                          
                           
                          
                </tbody>
                      </table>
                </div>
             </div>
               
              
        
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
                  <th scope="col "  >Name</th>
                  <th scope="col" style="width: 25%;">Recipient Phone and Email</th>
                  <th scope="col" style="width: 25%;">Recipient Address</th>
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
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>