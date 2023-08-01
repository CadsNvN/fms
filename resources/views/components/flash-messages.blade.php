@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="fixed top-5 left-1/2 bg-green-100 text-green-800 transform -translate-x-1/2 px-10 py-3 text-medium rounded">
        <p>{{session('message')}}</p>
    </div>
@endif