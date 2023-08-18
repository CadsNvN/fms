<x-app-layout>
    <section class="py-4">
        <div class="flex flex-col mx-auto max-w-[1240px]">
            <div class="flex flex-row justify-between mb-3">
                <div class="w-full py-2 border-b border-gray-300">
                    <h1 class="text-xl font-bold">Your Orders</h1>
                </div>
            </div>
    
            <div>
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="text-left bg-gray-200">
                            <th class="px-4 py-2">Order Number</th>
                            <th class="px-4 py-2">Total Amount</th>
                            <th class="px-4 py-2">Date Ordered</th>
                            <th class="px-4 py-2">Status</th>
                            {{-- <th class="px-4 py-2">Availability</th> --}}
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="border-t border-gray-300">
                                <td class="px-4 py-2 text-sm">{{$order->order_number}}</td>
                                <td class="px-4 py-2 text-sm">&#8369;{{ number_format($order->total_due, 2, '.', ',') }}</td>
                                <td class="px-4 py-2 text-sm">{{ $order->created_at->format('F d, Y') }}</td>
                                <td class="px-4 py-2 text-sm">
                                    @if ($order->status == "confirmed")
                                        <span class="rounded py-1 px-2 text-xs text-white bg-green-600">confirmed</span>
                                    @else
                                        <span class="rounded py-1 px-2 text-xs text-white bg-red-600">pending</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2 text-sm flex items-center space-x-2"> 
                                    @if ($order->status === "pending")
                                        <form action="{{ route('order.destroy', $order->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rounded p-2 cursor-pointer">
                                                <i class='bx bx-trash text-xl text-red-600'></i>
                                            </button>
                                        </form>
                                    @else                        
                                        <a href="{{route('invoice.print', $order->id)}}" class="text-white rounded text-xs px-4 py-1 bg-blue-600 ">Invoice</a>
                                    @endif                                          
                                </td>
                            </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
    