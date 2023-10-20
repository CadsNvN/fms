<div class="flex flex-col space-y-5">
    <div class="w-full flex flex-col space-y-1">
        <label class="text-xs ">CAUSE OF DEATH</label>
        {{-- <input type="text" name="causeOfDeath" placeholder="Cause of death" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
        value="{{ old('causeOfDeath') ?? ($deceased->causeOfDeath ?? '') }}"> --}}
        <select name="causeOfDeath" id="causeOfDeath" class="w-full text-sm bg-inherit border border-gray-300 rounded">
            <option value="" selected disabled>Select a cause of death</option>
            <option value="Cardiovascular_Diseases" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Cardiovascular_Diseases' || $deceased->causeOfDeath == 'Cardiovascular_Diseases')) ? 'selected' : '' }}>Cardiovascular Diseases</option>
            <option value="Cancer" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Cancer' || $deceased->causeOfDeath == 'Cancer')) ? 'selected' : '' }}>Cancer</option>
            <option value="Respiratory_Diseases" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Respiratory_Diseases' || $deceased->causeOfDeath == 'Respiratory_Diseases')) ? 'selected' : '' }}>Respiratory Diseases</option>
            <option value="Diabetes" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Diabetes' || $deceased->causeOfDeath == 'Diabetes')) ? 'selected' : '' }}>Diabetes</option>
            <option value="Infectious_Diseases" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Infectious_Diseases' || $deceased->causeOfDeath == 'Infectious_Diseases')) ? 'selected' : '' }}>Infectious Diseases</option>
            <option value="Kidney_Diseases" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Kidney_Diseases' || $deceased->causeOfDeath == 'Kidney_Diseases')) ? 'selected' : '' }}>Kidney Diseases</option>
            <option value="Hypertension" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Hypertension' || $deceased->causeOfDeath == 'Hypertension')) ? 'selected' : '' }}>Hypertension</option>
            <option value="Liver_Diseases" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Liver_Diseases' || $deceased->causeOfDeath == 'Liver_Diseases')) ? 'selected' : '' }}>Liver Diseases</option>
            <option value="Road_Traffic_Accidents" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Road_Traffic_Accidents' || $deceased->causeOfDeath == 'Road_Traffic_Accidents')) ? 'selected' : '' }}>Road Traffic Accidents</option>
            <option value="Neonatal_Disorders" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Neonatal_Disorders' || $deceased->causeOfDeath == 'Neonatal_Disorders')) ? 'selected' : '' }}>Neonatal Disorders</option>
            <option value="Maternal_Conditions" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Maternal_Conditions' || $deceased->causeOfDeath == 'Maternal_Conditions')) ? 'selected' : '' }}>Maternal Conditions</option>
            <option value="Malnutrition" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Malnutrition' || $deceased->causeOfDeath == 'Malnutrition')) ? 'selected' : '' }}>Malnutrition</option>
            <option value="Chronic_Liver_Disease" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Chronic_Liver_Disease' || $deceased->causeOfDeath == 'Chronic_Liver_Disease')) ? 'selected' : '' }}>Chronic Liver Disease</option>
            <option value="Alzheimer's_Disease_and_Other_Dementias" {{ (!is_null($deceased) && (old('causeOfDeath') == "Alzheimer's_Disease_and_Other_Dementias" || $deceased->causeOfDeath == "Alzheimer's_Disease_and_Other_Dementias")) ? 'selected' : '' }}>Alzheimer's Disease and Other Dementias</option>
            <option value="Renal_Failure" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Renal_Failure' || $deceased->causeOfDeath == 'Renal_Failure')) ? 'selected' : '' }}>Renal Failure</option>
            <option value="Congenital_Anomalies" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Congenital_Anomalies' || $deceased->causeOfDeath == 'Congenital_Anomalies')) ? 'selected' : '' }}>Congenital Anomalies</option>
            <option value="Firearm_Injuries" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Firearm_Injuries' || $deceased->causeOfDeath == 'Firearm_Injuries')) ? 'selected' : '' }}>Firearm Injuries</option>
            <option value="Chronic_Lower_Respiratory_Diseases" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Chronic_Lower_Respiratory_Diseases' || $deceased->causeOfDeath == 'Chronic_Lower_Respiratory_Diseases')) ? 'selected' : '' }}>Chronic Lower Respiratory Diseases</option>
            <option value="Suicide" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Suicide' || $deceased->causeOfDeath == 'Suicide')) ? 'selected' : '' }}>Suicide</option>
            <option value="Digestive_Diseases" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Digestive_Diseases' || $deceased->causeOfDeath == 'Digestive_Diseases')) ? 'selected' : '' }}>Digestive Diseases</option>
            <!-- Add other cause of death options here -->
            <option value="Other" {{ (!is_null($deceased) && (old('causeOfDeath') == 'Other' || $deceased->causeOfDeath == 'Other')) ? 'selected' : '' }}>Other (Specify Below)</option>
        </select>
        <!-- Add other cause of death options here -->
        <input id="otherCOD" name="otherCOD" placeholder="Specify Cause of Death" class="w-full text-sm bg-inherit border border-gray-300 rounded" style="display: none;"
        value="{{ old('otherCOD') ?? ($deceased->causeOfDeath ?? '') }}">
        @error('causeOfDeath')
            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
        @enderror
    </div>

    {{-- script for Cause of Death drop down list other --}}
    <script>
        // Get references to the select and text input elements
        const causeOfDeathSelect = document.getElementById('causeOfDeath');
        const otherCODInput = document.getElementById('otherCOD');
        
        // Listen for changes to the select input
        causeOfDeathSelect.addEventListener('change', function () {
            if (this.value === 'Other') {
                // If "Other" is selected, show the text input field
                otherCODInput.style.display = 'block';
            } else {
                // If another option is selected, hide the text input field and clear its value
                otherCODInput.style.display = 'none';
                otherCODInput.value = '';
            }
        });
    </script>    
    {{-- end of script --}}

    <div class="w-full flex flex-col space-y-1">
        <label class="text-xs ">PLACE OF DEATH</label>
        <input type="text" name="placeOfDeath" placeholder="Place of death" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
        value="{{ old('placeOfDeath') ?? ($deceased->placeOfDeath ?? '') }}">
        @error('placeOfDeath')
            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
        @enderror
    </div>

    <div class="w-full flex space-x-4 items-center">
        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">TIME OF DEATH</label>
            <input type="time" name="timeOfDeath" placeholder="Time of death" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('timeOfDeath') ?? ($deceased->timeOfDeath ?? '') }}">
            @error('timeOfDeath')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full flex flex-col space-y-1">
            <label class="text-xs ">DATE OF DEATH</label>
            <input type="date" name="dateOfDeath" placeholder="Date of death" class="w-full text-sm bg-inherit border border-gray-300 rounded " 
            value="{{ old('dateOfDeath') ?? ($deceased->dateOfDeath ?? '') }}">
            @error('dateOfDeath')
                <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>