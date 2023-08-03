<section class="bg-white">
    <div class="flex items=center justify-between mx-auto max-w-[1240px] ">
        <ul class="flex space-x-4 py-3">
            <li>
                <a  href="{{route('admin.dashboard')}}"
                    class="inline-flex items-center px-3 py-2 border border-gray-400 text-base leading-4 font-medium rounded text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    Dashboard
                </a>
            </li>
            <li class="">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-gray-400 text-base leading-4 font-medium rounded text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            Products
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('product.index')">
                            List of Products
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('product.create')">
                            Add new
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            <li>
                <button class="inline-flex items-center px-3 py-2 border border-gray-400 text-base leading-4 font-medium rounded text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    Orders
                </button>
            </li>
            <li>
                <a href=""></a>
            </li>
        </ul>
    </div>
</section>