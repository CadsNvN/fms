<div class="flex flex-col space-y-5">
    <div class="w-full flex space-x-4 items-start">
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">OCCUPATION</label>
            {{-- <input type="text" name="occupation" placeholder="Occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('occupation') ?? ($deceased->occupation ?? '') }}"> --}}
            <select id="occupation" name="occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded " >
                <option value="" selected disabled>choose an occupation</option>
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
                <!-- Add other occupation options here -->
                <option value="other" {{ old('occupation') == 'other' ? 'selected' : '' }}>Other (Specify Below)</option>
            </select>
                <!-- Input field for "Other" option -->
                <input type="text" id="otherOccupation" name="other_occupation" placeholder="Specify Occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded" style="display: none;" 
                value="{{ old('otherOccupation') ?? ($deceased->occupation ?? '') }}">
            @error('occupation')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        
        {{-- script for occupation drop down list other --}}
        <script>
            // Get references to the select and text input elements
            const occupationSelect = document.getElementById('occupation');
            const otherOccupationInput = document.getElementById('otherOccupation');
            
            // Listen for changes to the select input
            occupationSelect.addEventListener('change', function () {
                if (this.value === 'other') {
                    // If "Other" is selected, show the text input field
                    otherOccupationInput.style.display = 'block';
                } else {
                    // If another option is selected, hide the text input field and clear its value
                    otherOccupationInput.style.display = 'none';
                    otherOccupationInput.value = '';
                }
            });
        </script>
        {{-- end of script --}}
        

        {{--  --}}
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">RELIGION</label>
            <select name="religion" id="religion" class="w-full text-sm bg-inherit border border-gray-300 rounded">
                <option value="" selected disabled>choose a religion</option>
                <option value="Roman_Catholic" {{ (!is_null($deceased) && (old('religion') == 'Roman_Catholic' || $deceased->religion == 'Roman_Catholic')) ? 'selected' : '' }}>Roman Catholic</option>
                <option value="Islam" {{ (!is_null($deceased) && (old('religion') == 'Islam' || $deceased->religion == 'Islam')) ? 'selected' : '' }}>Islam</option>
                <option value="Iglesia_ni_Cristo" {{ (!is_null($deceased) && (old('religion') == 'Iglesia_ni_Cristo' || $deceased->religion == 'Iglesia_ni_Cristo')) ? 'selected' : '' }}>Iglesia ni Cristo</option>
                <!-- Add other cause of death options here -->
                <option value="other" {{ (!is_null($deceased) && (old('religion') == 'other' || $deceased->religion == 'other')) ? 'selected' : '' }}>Other (Specify Below)</option>
            </select>
            <input type="text" name="otherReligion" id="otherReligion" placeholder="Specify Religion" class="w-full text-sm bg-inherit border border-gray-300 rounded" style="display: none;"
            value="{{ old('otherReligion') ?? ($deceased->religion ?? '') }}">
            @error('otherReligion')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        {{-- script for religion drop down list other --}}
        <script>
            // Get references to the select and text input elements
            const religionSelect = document.getElementById('religion');
            const otherReligionInput = document.getElementById('otherReligion');
            
            // Listen for changes to the select input
            religionSelect.addEventListener('change', function () {
                if (this.value === 'other') {
                    // If "Other" is selected, show the text input field
                    otherReligionInput.style.display = 'block';
                } else {
                    // If another option is selected, hide the text input field and clear its value
                    otherReligionInput.style.display = 'none';
                    otherReligionInput.value = '';
                }
            });
        </script>
        {{-- end of script --}}

    </div>

    <div class="flex flex-col space-y-5">
        <div class="w-full flex space-x-4 items-start">
            <div class="w-full flex flex-col space-y-1">
                <label class="text-xs ">CITIZENSHIP</label>
                <select name="citizenship" id="citizenship" class="w-full text-sm bg-inherit border border-gray-300 rounded">
                    <option value="" selected disabled>choose a citizenship</option>
                    <option value="Filipino" {{ (!is_null($deceased) && (old('citizenship') == 'Filipino' || $deceased->citizenship == 'Filipino')) ? 'selected' : '' }}>Filipino</option>
                    <!-- Add other cause of death options here -->
                    <option value="Other" {{ (!is_null($deceased) && (old('citizenship') == 'Other' || $deceased->citizenship == 'Other')) ? 'selected' : '' }}>Other (Specify Below)</option>
                </select>
                <input type="text" name="otherCitizenship" id="otherCitizenship" placeholder="Specify Citizenship" class="w-full text-sm bg-inherit border border-gray-300 rounded" style="display: none;" 
                value="{{ old('citizenship') ?? ($deceased->citizenship ?? '') }}">
                @error('citizenship')
                    <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                @enderror
            </div>

            {{-- script for Cause of Death drop down list other --}}
            <script>
                // Get references to the select and text input elements
                const citizenshipSelect = document.getElementById('citizenship');
                const otherCitizenshipInput = document.getElementById('otherCitizenship');
                
                // Listen for changes to the select input
                citizenshipSelect.addEventListener('change', function () {
                    if (this.value === 'Other') {
                        // If "Other" is selected, show the text input field
                        otherCitizenshipInput.style.display = 'block';
                    } else {
                        // If another option is selected, hide the text input field and clear its value
                        otherCitizenshipInput.style.display = 'none';
                        otherCitizenshipInput.value = '';
                    }
                });
            </script>    
            {{-- end of script --}}
    
            <div class="w-full flex flex-col space-y-1">
                <label class="text-xs ">CIVIL STATUS</label>
                <select name="civilStatus" id="" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
                value="{{ old('civilStatus') ?? ($deceased->civilStatus ?? '') }}">
                    <option value="" selected disabled>choose a civil status</option>
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
