<x-app-layout>
    <section class="py-4">
        <div class="flex flex-col mx-auto max-w-[1300px] px-4">
            <div class="flex flex-row justify-between mb-3">
                <div class="w-full py-2 border-b border-gray-300">
                    <h1 class="text-xl font-bold">PENDING REQUEST</h1>
                </div>
            </div>
    
            <div>
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="text-left bg-gray-200">
                            <th class="px-4 py-2">Request Number</th>
                            <th class="px-4 py-2">Total Amount</th>
                            <th class="px-4 py-2">Date Requested</th>
                            <th class="px-4 py-2">Request Status</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($serviceRequest as $request)
                            <tr class="border-t border-gray-300">
                                <td class="px-4 py-2 text-sm">{{$request->requestNumber}}</td>
                                <td class="px-4 py-2 text-sm">&#8369;{{ number_format($request->serviceInformation->casket->price, 2, '.', ',') }}</td>
                                <td class="px-4 py-2 text-sm">{{ $request->created_at->format('F d, Y') }}</td>
                                <td class="px-4 py-2 text-sm">
                                    @if ($request->status == "confirmed")
                                        <span class="rounded py-1 px-2 text-xs text-white bg-green-600">Completed</span>
                                    @else
                                        <span class="rounded py-1 px-2 text-xs text-white bg-red-700">Pending</span>
                                    @endif
                                </td>

                                <td class="px-4 py-2 text-sm flex items-center space-x-2"> {{-- href="{{ route('orders.process', $reqest->id) }}" --}}                                           
                                    <a href="{{ route('service.process', $request->id) }}" class="rounded p-2 cursor-pointer text-xs font-medium text-white bg-green-700 px-4 py-1">
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
    