<x-app-layout>
    <section class="py-4">
        <div class="flex flex-col mx-auto max-w-[1240px]">
            <div class="flex flex-row justify-between mb-3">
                <div class="w-full py-2 border-b border-gray-300">
                    <h1 class="text-xl font-bold">Your Products</h1>
                </div>
            </div>
    
            <div>
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="text-left bg-gray-200">
                            <th class="px-4 py-2">Order Number</th>
                            <th class="px-4 py-2">Total Amount</th>
                            <th class="px-4 py-2">Date Ordered</th>
                            <th class="px-4 py-2">Order Status</th>
                            <th class="px-4 py-2">Invoice</th>
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
                                        <span class="rounded py-1 px-2 text-xs text-white bg-red-700">pending</span>
                                    @endif
                                </td>
                                
                                <td class="px-4 py-2 text-sm">                                           
                                    <a href="{{route('invoice.print', $order->id)}}" class="text-white text-xs rounded px-4 py-1 bg-blue-600 ">invoice</a>
                                </td>

                                <td class="px-4 py-2 text-sm flex items-center space-x-2">                                           
                                    <a href="{{ route('orders.process', $order->id) }}" class="rounded p-2 cursor-pointer text-xs font-medium text-white bg-green-700 px-4 py-1">
                                        Process
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
    