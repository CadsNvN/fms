<div class="flex flex-col space-y-5">
    <div class="w-full flex flex-col space-y-1">
        <label class="text-xs ">CAUSE OF DEATH</label>
        <input type="text" name="causeOfDeath" placeholder="Cause of death" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('causeOfDeath') }}">
        @error('causeOfDeath')
            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
        @enderror
    </div>

    <div class="w-full flex flex-col space-y-1">
        <label class="text-xs ">PLACE OF DEATH</label>
        <input type="text" name="placeOfDeath" placeholder="Place of death" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('placeOfDeath') }}">
        @error('placeOfDeath')
            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
        @enderror
    </div>

    <div class="w-full flex space-x-4 items-center">
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">TIME OF DEATH</label>
            <input type="time" name="timeOfDeath" placeholder="Time of death" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('timeOfDeath') }}">
            @error('timeOfDeath')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">DATE OF DEATH</label>
            <input type="date" name="dateOfDeath" placeholder="Date of death" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('dateOfDeath') }}">
            @error('dateOfDeath')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>