<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        {{-- firstName --}}
        <div>
            <x-input-label for="firstName" :value="__('First name')" />
            <x-text-input id="firstName" name="firstName" type="text" class="mt-1 block w-full" :value="old('firstName', $profile->firstName)" required autofocus autocomplete="fisrtName" />
            <x-input-error class="mt-2" :messages="$errors->get('firstName')" />
        </div>
        {{-- middleName --}}
        <div>
            <x-input-label for="middleName" :value="__('Middle name')" />
            <x-text-input id="middleName" name="middleName" type="text" class="mt-1 block w-full" :value="old('middleName', $profile->middleName)" required autofocus autocomplete="middleName" />
            <x-input-error class="mt-2" :messages="$errors->get('middleName')" />
        </div>
        {{-- lastName --}}
        <div>
            <x-input-label for="lastName" :value="__('Last name')" />
            <x-text-input id="lastName" name="lastName" type="text" class="mt-1 block w-full" :value="old('lastName', $profile->lastName)" required autofocus autocomplete="lastName" />
            <x-input-error class="mt-2" :messages="$errors->get('lastName')" />
        </div>
        {{-- phoneNumber --}}
        <div>
            <x-input-label for="phoneNumber" :value="__('Phone number')" />
            <x-text-input id="phoneNumber" name="phoneNumber" type="text" class="mt-1 block w-full" :value="old('phoneNumber', $profile->phoneNumber)" required autofocus autocomplete="phoneNumber" />
            <x-input-error class="mt-2" :messages="$errors->get('phoneNumber')" />
        </div>
        {{-- address --}}
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $profile->address)" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
