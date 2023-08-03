<x-app-layout>
    <div class="flex flex-col mx-auto max-w-[1240px]">
        <div class="container py-10 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-blue-300 px-4 py-6 rounded-lg">
                        <i class='bx bx-user-pin text-4xl text-blue-700'></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">{{$users}}</h2>
                        <p class="leading-relaxed">Users</p>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-blue-300 px-4 py-6 rounded-lg">
                        <i class='bx bxs-component text-4xl text-blue-700'></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">{{$products}}</h2>
                        <p class="leading-relaxed">Number of Products</p>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-blue-300 px-4 py-6 rounded-lg">
                        <i class='bx bx-list-ul text-4xl text-blue-700'></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">0</h2>
                        <p class="leading-relaxed">Current Orders</p>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-blue-300 px-4 py-6 rounded-lg">
                        <i class='bx bx-list-check text-4xl text-blue-700'></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">0</h2>
                        <p class="leading-relaxed">Completed Orders</p>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-blue-300 px-4 py-6 rounded-lg">
                        <i class='bx bx-message-detail text-4xl text-blue-700'></i>
                        <h2 class="title-font font-medium text-3xl text-gray-900">0</h2>
                        <p class="leading-relaxed">New Feedback</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>