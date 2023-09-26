<x-app-layout>
    <section class="py-4">
        <div class="flex items-start space-x-6 mx-auto max-w-[1300px] px-4">
            <div class="w-3/5 flex flex-col space-y-4 ">
                <div>
                    <div>
                        <h1 class="font-bold">SERVICE REQUEST</h1>
                    </div>
                    <div class="h-auto border border-gray-200 shadow rounded-md bg-white p-4">
                        <div class="flex flex-col space-y-1">
                            <div class="w-full flex justify-between">
                                <p class="text-sm font-medium">ORDER NUMBER:</p>
                                <p class="text-sm font-bold">{{$serviceRequest->requestNumber}}</p>
                            </div>
                            <div class="w-full flex justify-between">
                                <p class="w-full text-sm font-medium">TOTAL AMOUNT:</p>
                                <p class="text-sm font-medium">&#8369;{{ number_format($serviceRequest->serviceInformation->casket->price, 2, '.', ',') }}</p>
                            </div>
                            <div class="w-full flex justify-between">
                                <p class="text-sm font-medium">STATUS:</p>
                                @if ($serviceRequest->status == "completed")
                                    <span class="rounded py-1 px-2 text-xs text-white bg-green-600">Completed</span>
                                @else
                                    <span class="rounded py-1 px-2 text-xs text-white bg-red-600">Pending</span>
                                @endif
                                {{-- <p class="text-sm font-medium">{{$order->status}}</p> --}}
                            </div>
                            <div class="w-full flex justify-between">
                                <p class="text-sm font-medium">DATE ORDERED:</p>
                                <p class="text-sm font-medium">{{ $serviceRequest->created_at->format('F d, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div >
                    <div>
                        <h1 class="font-bold">CUSTOMER</h1>
                    </div>
                    <div class="flex items-center space-x-4 h-auto border border-gray-200 shadow rounded-md bg-white px-4 py-3">
                        <img src="{{asset('images/Torres_Escaro2.jpg')}}" alt="" class="w-20 h-20 rounded-full border border-gray-300">
                        <div class="flex flex-col">
                            <p class="text-base font-bold">
                                {{$serviceRequest->user->profile->firstName}}
                                {{$serviceRequest->user->profile->middleName}}
                                {{$serviceRequest->user->profile->lastName}}
                            </p>
                            <p class="text-sm">{{$serviceRequest->user->profile->address}}</p>
                            <p class="text-xs">{{$serviceRequest->user->profile->phoneNumber}}</p>
                        </div>
                    </div>
                </div>

                {{-- <div >
                    <div>
                        <h1 class="font-bold">ITEMS</h1>
                    </div>
                    <table class="table-auto w-full border-collapse">
                        <thead>
                            <tr class="text-left bg-gray-200">
                                <th class="px-4 py-2">Image</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Unit Price</th>
                                <th class="px-4 py-2">Quantity</th>
                                <th class="px-4 py-2">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_items as $item)
                                <tr class="border-t border-gray-300">
                                    <td class="px-4 py-2">
                                        <img src="{{asset('images/Torres_Escaro2.jpg')}}" alt="Product Image" class="w-10 h-10">
                                    </td>
                                    <td class="px-4 py-2 text-sm">{{$item->product->name}}</td>
                        
                                    <td class="px-4 py-2 text-sm">&#8369;{{ number_format($item->product->price, 2, '.', ',') }}</td>

                                    <td class="px-4 py-2 text-sm">{{$item->quantity}}</td>

                                    <td class="px-4 py-2 text-sm">&#8369;{{ number_format($item->total_price, 2, '.', ',') }}</td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}
            </div>

            <div class="w-2/5">
                <div>
                    <h1 class="font-bold">TRANSACTION</h1>
                </div>
                <div class="h-auto border border-gray-200 shadow rounded-md bg-white p-5">
                    <form action="{{route('service.complete', $serviceRequest->id)}}" method="POST"> {{--action="{{route('orders.confirm', $order->id)}}"--}}
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-3">
                            <div class="flex space-x-4">
                                <div class="w-full flex flex-col space-y-1">
                                    <label for="paymentMethod" class="text-xs font-medium">PAYMENT METHOD</label>
                                    <select name="paymentMethod" id="paymentMethod" class="border border-gray-300 rounded text-sm">
                                        <option value="cash">Cash</option>
                                        <option value="card">Card</option>
                                        <option value="e-wallet">E-Wallet</option>
                                    </select>
                                </div>
        
                                <div class="w-full flex flex-col space-y-1">
                                    <label for="ammountReceived" class="text-xs font-medium">AMOUNT RECIEVED</label>
                                    <input type="text" name="ammountReceived" id="ammountReceived" class="border border-gray-300 rounded text-sm">
                                </div>
                            </div>

                            <div class="flex flex-col space-y-1">
                                <label for="paymentDate" class="text-xs font-medium">DATE:</label>
                                <input type="date" name="paymentDate" id="paymentDate" class="border border-gray-300 rounded text-sm">
                            </div>

                            <div>
                                <div class="border-b border-gray-400 mb-2 ">
                                    <h1 class="text-sm font-semibold">PAID BY</h1>
                                </div>
                                <div class="flex w-full space-x-4">
                                    <div class="w-full flex flex-col space-y-1">
                                        <label for="firstName" class="text-xs font-medium">FIRST NAME:</label>
                                        <input type="text" name="firstName" id="first_name" class="border border-gray-300 rounded text-sm">
                                    </div>
                                    <div class="w-full flex flex-col space-y-1">
                                        <label for="lastName" class="text-xs font-medium">LAST NAME:</label>
                                        <input type="text" name="lastName" id="last_name" class="border border-gray-300 rounded text-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end pt-3">
                                <button class="w-full bg-blue-700 rounded px-4 py-2 text-white">CONFIRM REQUEST</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>