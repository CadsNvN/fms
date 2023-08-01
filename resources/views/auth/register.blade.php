<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="w-full">
        @csrf

        <!-- Name -->
        <div class="flex justify-between space-x-4 mt-4 w-full">
            <div class="w-1/3">
                <x-input-label for="firstName" :value="__('First Name')" />
                <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
            </div>

            <div class="w-1/3">
                <x-input-label for="middleName" :value="__('Middle Name')" />
                <x-text-input id="middleName" class="block mt-1 w-full" type="text" name="middleName" :value="old('middleName')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('middleName')" class="mt-2" />
            </div>

            <div class="w-1/3">
                <x-input-label for="lastName" :value="__('Last Name')" />
                <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
            </div>
        </div>

        <div  class="mt-4">
            <x-input-label for="phoneNumber" :value="__('Phone Number')" />
            <x-text-input id="phoneNumber" class="block mt-1 w-full" type="number" name="phoneNumber" :value="old('phoneNumber')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
        </div>

        <div  class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="w-full flex space-x-4 justify-between">
             <!-- Password -->
            <div class="mt-4 w-1/2">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 w-1/2">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center space-x-4 justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="rounded-md px-4 py-2 bg-blue-500 text-white">Register</button>
        </div>
    </form>
</x-guest-layout>
