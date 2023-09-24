<div class="flex flex-col space-y-5">
    <div class="w-full flex flex-col space-y-1">
        <label class="text-xs ">NAME AND ADDRESS OF CEMETERY</label>
        <input type="text" name="addressOfCemetery" placeholder="Name and address of cemetery" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('addressOfCemetery') ?? $deceased->addressOfCemetery }}">
        @error('addressOfCemetery')
            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
        @enderror
    </div>

    <div class="w-full flex flex-col space-y-1">
        <label class="text-xs ">PLACE OF VIEWING</label>
        <input type="text" name="placeOfViewing" placeholder="Place of viewing" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('placeOfViewing') ?? $deceased->placeOfViewing }}">
        @error('placeOfViewing')
            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
        @enderror
    </div>

    <div class="w-full flex space-x-4 items-center"> 
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">DATE OF INTERMENT</label>
            <input type="date" name="dateOfInterment" placeholder="Date of interment" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('dateOfInterment') ?? $deceased->dateOfInterment }}">
            @error('dateOfInterment')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">TIME OF INTERMENT</label>
            <input type="time" name="timeOfInterment" placeholder="Time of interment" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('timeOfInterment') ?? $deceased->timeOfInterment }}">
            @error('timeOfInterment')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>