<div class="flex flex-col space-y-5">
    <div class="w-full flex space-x-4 items-center">
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">OCCUPATION</label>
            <input type="text" name="occupation" placeholder="Occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('occupation') }}">
            @error('occupation')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>


        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">RELIGION</label>
            <input type="text" name="religion" placeholder="Religion" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('religion') }}">
            @error('religion')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

    </div>

    <div class="flex flex-col space-y-5">
        <div class="w-full flex space-x-4 items-center">
            <div class="w-full flex flex-col space-y-1">
                <label class="text-xs ">CITIZENSHIP</label>
                <input type="text" name="citizenship" placeholder="Citizenship" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('citizenship') }}">
                @error('citizenship')
                    <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="w-full flex flex-col space-y-1">
                <label class="text-xs ">CIVIL STATUS</label>
                <select name="civilStatus" id="" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('civilStatus') }}">
                    <option value="Married">Married</option>
                    <option value="Single">Single</option>
                    <option value="Separated">Separated</option>
                    <option value="Widowed">Widowed</option>
                </select>
                @error('civilStatus')
                    <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="w-full flex flex-col space-y-1">
                <label class="text-xs ">SEX</label>
                <select name="sex" id="" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('sex') }}">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                @error('sex')
                    <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="w-full flex space-x-4 items-center">
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">NAME OF FATHER</label>
            <input type="text" name="fathersName" placeholder="Name of father" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('fathersName') }}">
            @error('fathersName')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">MAIDEN NAME OF MOTHER</label>
            <input type="text" name="mothersMaidenName" placeholder="Maiden name of mother" class="w-full text-sm bg-inherit border border-gray-300 rounded " value="{{ old('mothersMaidenName') }}">
            @error('mothersMaidenName')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
