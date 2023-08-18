<x-app-layout>
    <div class="bg-white p-8 shadow-md rounded-md">
        <h1 class="text-2xl font-semibold mb-4">Order Receipt</h1>
        <p class="mb-2">Order Number: {{ $order->order_number }}</p>
        
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-100 border-b">Product</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Quantity</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Price</th>
                    <th class="py-2 px-4 bg-gray-100 border-b">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderItems as $item)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $item->product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $item->quantity }}</td>
                        <td class="py-2 px-4 border-b">Php{{ number_format($item->unit_price, 2, '.', ',') }}</td>
                        <td class="py-2 px-4 border-b">Php{{ number_format($item->total_price, 2, '.', ',') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <p class="mt-4">Total Amount: Php{{ number_format($order->total_due, 2, '.', ',') }}</p>
    </div>    
</x-app-layout>