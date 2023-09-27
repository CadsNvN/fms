<div class="flex flex-col space-y-5">
    <div class="w-full flex space-x-4 items-start">
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">OCCUPATION</label>
            {{-- <input type="text" name="occupation" placeholder="Occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('occupation') ?? ($deceased->occupation ?? '') }}"> --}}
            <select name="occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded " >
                <option value="teacher" {{ (!is_null($deceased) && (old('occupation') == 'teacher' || $deceased->occupation == 'teacher')) ? 'selected' : '' }}>Teacher</option>
                <option value="nurse" {{ (!is_null($deceased) && (old('occupation') == 'nurse' || $deceased->occupation == 'nurse')) ? 'selected' : '' }}>Nurse</option>
                <option value="call_center_agent" {{ (!is_null($deceased) && (old('occupation') == 'call_center_agent' || $deceased->occupation == 'call_center_agent')) ? 'selected' : '' }}>Call Center Agent</option>
                <option value="doctor" {{ (!is_null($deceased) && (old('occupation') == 'doctor' || $deceased->occupation == 'doctor')) ? 'selected' : '' }}>Doctor</option>
                <option value="engineer" {{ (!is_null($deceased) && (old('occupation') == 'engineer' || $deceased->occupation == 'engineer')) ? 'selected' : '' }}>Engineer</option>
                <option value="accountant" {{ (!is_null($deceased) && (old('occupation') == 'accountant' || $deceased->occupation == 'accountant')) ? 'selected' : '' }}>Accountant</option>
                <option value="police_officer" {{ (!is_null($deceased) && (old('occupation') == 'police_officer' || $deceased->occupation == 'police_officer')) ? 'selected' : '' }}>Police Officer</option>
                <option value="lawyer" {{ (!is_null($deceased) && (old('occupation') == 'lawyer' || $deceased->occupation == 'lawyer')) ? 'selected' : '' }}>Lawyer</option>
                <option value="government_employee" {{ (!is_null($deceased) && (old('occupation') == 'government_employee' || $deceased->occupation == 'government_employee')) ? 'selected' : '' }}>Government Employee</option>
                <option value="salesperson" {{ (!is_null($deceased) && (old('occupation') == 'salesperson' || $deceased->occupation == 'salesperson')) ? 'selected' : '' }}>Salesperson</option>
                <option value="construction_worker" {{ (!is_null($deceased) && (old('occupation') == 'construction_worker' || $deceased->occupation == 'construction_worker')) ? 'selected' : '' }}>Construction Worker</option>
                <option value="farmer_fisherman" {{ (!is_null($deceased) && (old('occupation') == 'farmer_fisherman' || $deceased->occupation == 'farmer_fisherman')) ? 'selected' : '' }}>Farmer/Fisherman</option>
                <option value="entrepreneur" {{ (!is_null($deceased) && (old('occupation') == 'entrepreneur' || $deceased->occupation == 'entrepreneur')) ? 'selected' : '' }}>Entrepreneur</option>
                <option value="driver" {{ (!is_null($deceased) && (old('occupation') == 'driver' || $deceased->occupation == 'driver')) ? 'selected' : '' }}>Driver</option>
                <option value="tour_guide" {{ (!is_null($deceased) && (old('occupation') == 'tour_guide' || $deceased->occupation == 'tour_guide')) ? 'selected' : '' }}>Tour Guide</option>
                <option value="graphic_designer" {{ (!is_null($deceased) && (old('occupation') == 'graphic_designer' || $deceased->occupation == 'graphic_designer')) ? 'selected' : '' }}>Graphic Designer</option>
                <option value="it_software_developer" {{ (!is_null($deceased) && (old('occupation') == 'it_software_developer' || $deceased->occupation == 'it_software_developer')) ? 'selected' : '' }}>IT/Software Developer</option>
                <option value="dentist" {{ (!is_null($deceased) && (old('occupation') == 'dentist' || $deceased->occupation == 'dentist')) ? 'selected' : '' }}>Dentist</option>
                <option value="architect" {{ (!is_null($deceased) && (old('occupation') == 'architect' || $deceased->occupation == 'architect')) ? 'selected' : '' }}>Architect</option>
                <option value="real_estate_agent" {{ (!is_null($deceased) && (old('occupation') == 'real_estate_agent' || $deceased->occupation == 'real_estate_agent')) ? 'selected' : '' }}>Real Estate Agent</option>
                <!-- Add "Other" option for manual entry -->
                <option id="occupation-select" >Other</option>
            </select>
            @error('occupation')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <!-- Additional text input field for manual entry -->
        <div class="w-full flex flex-col space-y-1" id="other-occupation-container" style="display: none;">
            <label class="text-xs">Other Occupation</label>
            <input type="text" name="other_occupation" id="other-occupation" placeholder="Specify Occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded">
        </div>

        <script>
            // Get references to the select and text input elements
            const occupationSelect = document.getElementById('occupation-select');
            const otherOccupationContainer = document.getElementById('other-occupation-container');
            const otherOccupationInput = document.getElementById('other-occupation');
        
            // Listen for changes to the select input
            occupationSelect.addEventListener('click', function () {
                if (this.value === 'other') {
                    // If "Other" is selected, show the text input field
                    otherOccupationContainer.style.display = 'block';
                } else {
                    // If another option is selected, hide the text input field and clear its value
                    otherOccupationContainer.style.display = 'none';
                    otherOccupationInput.value = '';
                }
            });
        </script>


        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">RELIGION</label>
            <input type="text" name="religion" placeholder="Religion" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('religion') ?? ($deceased->religion ?? '') }}">
            @error('religion')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

    </div>

    <div class="flex flex-col space-y-5">
        <div class="w-full flex space-x-4 items-start">
            <div class="w-full flex flex-col space-y-1">
                <label class="text-xs ">CITIZENSHIP</label>
                <input type="text" name="citizenship" placeholder="Citizenship" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
                value="{{ old('citizenship') ?? ($deceased->citizenship ?? '') }}">
                @error('citizenship')
                    <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="w-full flex flex-col space-y-1">
                <label class="text-xs ">CIVIL STATUS</label>
                <select name="civilStatus" id="" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
                value="{{ old('civilStatus') ?? ($deceased->civilStatus ?? '') }}">
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
                <select name="sex" id="" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
                value="{{ old('sex') ?? ($deceased->sex ?? '') }}">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                @error('sex')
                    <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="w-full flex space-x-4 items-start">
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">NAME OF FATHER</label>
            <input type="text" name="fathersName" placeholder="Name of father" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('fathersName') ?? ($deceased->fathersName ?? '') }}">
            @error('fathersName')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">MAIDEN NAME OF MOTHER</label>
            <input type="text" name="mothersMaidenName" placeholder="Maiden name of mother" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('mothersMaidenName') ?? ($deceased->mothersMaidenName ?? '') }}">
            @error('mothersMaidenName')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
