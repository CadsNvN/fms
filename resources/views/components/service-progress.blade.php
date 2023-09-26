@php
    $serviceInformation = \App\Models\ServiceInformation::find($serviceId);
@endphp


<div class="absolute left-1/2 transform -translate-x-1/2 w-full p-4 flex items-center justify-center">
    <ul class="flex items-center space-x-3">
        <li class="flex items-center justify-center font-bold w-14 h-14 rounded-full 
        {{ $serviceInformation->casket && $serviceInformation->hearse ? 'bg-green-200' : 'bg-gray-200' }}
        {{ $page == 'inclusions' ? 'border-[3px] border-green-500' : ''}} ">
            <p class="text-2xl {{ $serviceInformation->casket && $serviceInformation->hearse ? 'text-green-500' : 'text-gray-400' }} ">1</p>
        </li>

        <p class="font-bold text-xl {{ $serviceInformation->deceasedInformation ? 'text-green-500' : 'text-gray-400' }}">---</p>

        <li class="flex items-center justify-center font-bold w-14 h-14 rounded-full
        {{ $serviceInformation->deceasedInformation ? 'bg-green-200' : 'bg-gray-200' }}
        {{ $page == 'deceased' ? 'border-[3px] border-green-500' : ''}} ">
            <p class="text-2xl {{ $serviceInformation->deceasedInformation ? 'text-green-500' : 'text-gray-400' }} ">2</p>
        </li>

        <p class="font-bold text-xl {{ $serviceInformation->informant ? 'text-green-500' : 'text-gray-400'  }} ">---</p>

        <li class="flex items-center justify-center font-bold w-14 h-14 rounded-full
        {{ $serviceInformation->informant ? 'bg-green-200' : 'bg-gray-200' }}
        {{ $page == 'informant' ? 'border-[3px] border-green-500' : ''}} ">
            <p class="text-2xl {{ $serviceInformation->informant ? 'text-green-500' : 'text-gray-400'  }} ">3</p>
        </li>

        <p class="font-bold text-xl text-gray-400 {{ is_null($serviceInformation->other_services) ? 'text-gray-400' : 'text-green-500' }}">---</p>

        <li class="flex items-center justify-center font-bold w-14 h-14 rounded-full
        {{ is_null($serviceInformation->other_services) ? 'bg-gray-200' : 'bg-green-200' }}
        {{ $page == 'others' ? 'border-[3px] border-green-500' : ''}} ">
            <p class="text-2xl {{ is_null($serviceInformation->other_services) ? 'text-gray-400' : 'text-green-500' }} ">4</p>
        </li>
    </ul>
</div>