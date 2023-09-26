<x-app-layout>
    <section>
        <div class="max-w-[1300px] mx-auto px-4">
            <x-service-progress :serviceId="$serviceId" :page="$page" />
            <form action="{{ route('service.setOtherServices', $serviceId) }}" method="POST"
            class="w-full flex items-center space-x-4 ">
            @csrf
            @method('PUT')
                <div class="w-1/2">
                    <x-candle />
                </div>
                <div class="flex flex-col space-y-4 w-2/3 pt-16">
                    <div>
                        <h1 class="text-2xl font-medium">OTHER SERVICES</h1>
                        <h2 class="text-base text-gray-600">Please feel free to specify any additional assistance or services you may require.</h1>
                    </div>
                    <div>
                        <textarea name="otherServices" placeholder="Write something.."
                        class="w-full min-h-[150px] rounded border-2 border-gray-200 p-4 text-justify">
                        {{ ($serviceInformation->other_services ?? '') }}
                        </textarea>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" 
                            href="{{ route('service.informant', $serviceId) }}"
                        >Back</a>
                        <button type="submit" class=" text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer">Save and Proceed</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>