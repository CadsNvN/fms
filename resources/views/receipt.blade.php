<!DOCTYPE html>
<html lang="en">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">
    
            <title>Receipt</title>
    
            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
            <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <link rel="stylesheet" href="{{ asset('css/receipt.css') }}">

        </head>
{{-- <body>
    <div class="w-full flex flex-col items-center justify-start p-20">
        <div  class="receipt-container w-full ">
            <div class="bg-white ">
                <h1 class="text-2xl font-semibold mb-4">Order Receipt</h1>
                <p class="mb-2">Order Number: {{ $order->order_number }}</p>
                
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="border-y border-gray-300 bg-gray-200">
                            <th class="py-2 px-4 text-left">Product</th>
                            <th class="py-2 px-4 text-left">Quantity</th>
                            <th class="py-2 px-4 text-left">Price</th>
                            <th class="py-2 px-4 text-left">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderItems as $item)
                            <tr>
                                <td class="py-2 px-4 text-left">{{ $item->product->name }}</td>
                                <td class="py-2 px-4 text-left">{{ $item->quantity }}</td>
                                <td class="py-2 px-4 text-left">Php{{ number_format($item->unit_price, 2, '.', ',') }}</td>
                                <td class="py-2 px-4 text-left">Php{{ number_format($item->total_price, 2, '.', ',') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <p class="mt-4">Total Amount: Php{{ number_format($order->total_due, 2, '.', ',') }}</p>
            </div> 
        </div>

        <div>
            <button id="print" class="rounded bg-blue-700 text-white px-4 py-2">print</button>
        </div>
    </div>

    <script src="{{ asset('js/html2canvas.js') }}"></script>
    <script src="{{ asset('js/printReceipt.js') }}"></script>
</body> --}}

<body>
    <div class="buttons-container flex space-x-4">
      <button id="save" class="rounded bg-blue-700 text-white px-4 py-2">Save</button>
      <button id="print" class="rounded bg-gray-200 text-black px-4 py-2 hover:text-white" >Print</button>
    </div>
    <a id="save_to_image">
      <div class="invoice-container">
        <table cellpadding="0" cellspacing="0">
          <tr class="top">
            <td colspan="2">
              <table>
                <tr>
                  <td class="title">
                    <a href="/" class=" flex space-x-2 items-center">
                        <img src="{{asset('images/torreslogo.png')}}" alt="" class="w-16 h-16 rounded-full border border-gray-300">
                        <div>
                            <h1 class="text-sm font-bold">TORRES ESCARO</h1>
                            <p class="text-xs">Funeral Services</p>
                        </div>
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr class="information">
            <td colspan="2">
              <table>
                <tr>
                  <td>
                    TORRES ESCARO Funeral Services<br />
                    110 Bayanan Road,<br />
                    Bacoor, Cavite 4102
                  </td>
                  <td>
                    Youtube Inc. <br />
                    Juan Dela Cruz <br />
                    pinoyfreecoder.com
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr class="heading">
            <td>Order Number</td>
            <td></td>
          </tr>
          <tr class="details">
            <td>Order Number</td>
            <td>{{ $order->order_number }}</td>
          </tr>

          <tr class="heading">
            <td>Payment Method</td>
            <td>{{ $order->payment_method }}</td>
          </tr>
          <tr class="details-2">
            <td>Amount Recieved</td>
            <td>PHP {{ $order->ammount_recived }}</td>
          </tr>
          <tr class="details">
            <td>Change</td>
            <td>PHP {{ $order->change }}</td>
          </tr>

          <tr class="heading">
            <td>Item</td>
            <td>Price</td>
          </tr>
          @foreach ($orderItems as $item) 
            <tr class="item">
                <td>{{ $item->product->name }}</td>
                <td>{{ number_format($item->total_price, 2, '.', ',') }}</td>
            </tr>
            @endforeach
          <tr class="total">
            <td></td>
            <td>Total : PHP {{ $order->total_due }}</td>
          </tr>
        </table>
      </div>
    </a>
    <script src="{{ asset('js/html2canvas.js') }}"></script>
    <script src="{{ asset('js/printReceipt.js') }}"></script>
  </body>
</html>