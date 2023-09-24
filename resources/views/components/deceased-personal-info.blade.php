<div class="flex flex-col space-y-5">
    <div class="w-full flex space-x-4 items-start">
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">FIRST NAME</label>
            <input type="text" name="firstName" placeholder="First name" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('firstName') ?? $deceased->firstName }}">
            @error('firstName')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">MIDDLE NAME</label>
            <input type="text" name="middleName" placeholder="Middle name" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('middleName') ?? $deceased->middleName }}">
            @error('middleName')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">LAST NAME</label>
            <input type="text" name="lastName" placeholder="Last name" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('lastName') ?? $deceased->lastName }}">
            @error('lastName')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="w-full flex space-x-4 items-start">
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">DATE OF BIRTH</label>
            <input type="date" name="dob" placeholder="Date of Birth" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('dob') ?? $deceased->dob }}">
            @error('dob')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">AGE</label>
            <input type="number" name="age" placeholder="Age" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('age') ?? $deceased->age }}">
            @error('age')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">HEIGHT</label>
            <input type="text" name="height" placeholder="Height" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('height') ?? $deceased->height }}">
            @error('height')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">WEIGHT</label>
            <input type="text" name="weight" placeholder="Weight" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('weight') ?? $deceased->weight }}">
            @error('weight')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="w-full flex flex-col space-y-1">
        <label class="text-xs ">RESIDENCE</label>
        <input type="text" name="address" placeholder="Residence" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
        value="{{ old('address') ?? $deceased->address }}">
        @error('address')
            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
        @enderror
    </div>
</div>