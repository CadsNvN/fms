<x-app-layout>
    <section>
        <div class="mx-auto max-w-[1300px] px-4">
            <x-service-progress :serviceId="$serviceId" :page="$page"/>
            <div class="w-full flex flex-col py-4">
                <div class="w-full flex items-center justify-between space-x-4">
                    <div class="w-1/2">
                        <x-candle />
                    </div>
                    
                    <form action="{{ route('service.informant.store', $serviceId) }}" method="POST" class="w-2/3 pt-16">
                        @csrf
                        <div class="flex flex-col space-y-5">
                            <div class="">
                                <p class="text-2xl font-medium">INFORMANT'S INFORMATION</p>
                            </div>

                            <div class="form-section flex flex-col space-y-4" id="personal-info">
                                
                                <div class="w-full flex space-x-4 items-start">
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">FIRST NAME</label>
                                        <input type="text" name="firstName" placeholder="First name" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('firstName') ?? ($informant->firstName ?? '') }}">
                                        @error('firstName')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
            
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">MIDDLE NAME</label>
                                        <input type="text" name="middleName" placeholder="Middle name" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('middleName') ?? ($informant->middleName ?? '') }}">
                                        @error('middleName')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">LAST NAME</label>
                                        <input type="text" name="lastName" placeholder="Last name" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('lastName') ?? ($informant->lastName ?? '') }}">
                                        @error('lastName')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                </div>
        
                                <div class="w-full flex space-x-4 items-center">
                                    
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">AGE</label>
                                        <input type="number" name="age" placeholder="Age" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('age') ?? ($informant->age ?? '') }}">
                                        @error('age')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">OCCUPATION</label>
                                        <select name="occupation" id="occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded " >
                                            <option value="" selected disabled>choose an occupation</option>
                                            <option value="teacher" {{ (!is_null($informant) && (old('occupation') == 'teacher' || $informant->occupation == 'teacher')) ? 'selected' : '' }}>Teacher</option>
                                            <option value="nurse" {{ (!is_null($informant) && (old('occupation') == 'nurse' || $informant->occupation == 'nurse')) ? 'selected' : '' }}>Nurse</option>
                                            <option value="call_center_agent" {{ (!is_null($informant) && (old('occupation') == 'call_center_agent' || $informant->occupation == 'call_center_agent')) ? 'selected' : '' }}>Call Center Agent</option>
                                            <option value="doctor" {{ (!is_null($informant) && (old('occupation') == 'doctor' || $informant->occupation == 'doctor')) ? 'selected' : '' }}>Doctor</option>
                                            <option value="engineer" {{ (!is_null($informant) && (old('occupation') == 'engineer' || $informant->occupation == 'engineer')) ? 'selected' : '' }}>Engineer</option>
                                            <option value="accountant" {{ (!is_null($informant) && (old('occupation') == 'accountant' || $informant->occupation == 'accountant')) ? 'selected' : '' }}>Accountant</option>
                                            <option value="police_officer" {{ (!is_null($informant) && (old('occupation') == 'police_officer' || $informant->occupation == 'police_officer')) ? 'selected' : '' }}>Police Officer</option>
                                            <option value="lawyer" {{ (!is_null($informant) && (old('occupation') == 'lawyer' || $informant->occupation == 'lawyer')) ? 'selected' : '' }}>Lawyer</option>
                                            <option value="government_employee" {{ (!is_null($informant) && (old('occupation') == 'government_employee' || $informant->occupation == 'government_employee')) ? 'selected' : '' }}>Government Employee</option>
                                            <option value="salesperson" {{ (!is_null($informant) && (old('occupation') == 'salesperson' || $informant->occupation == 'salesperson')) ? 'selected' : '' }}>Salesperson</option>
                                            <option value="construction_worker" {{ (!is_null($informant) && (old('occupation') == 'construction_worker' || $informant->occupation == 'construction_worker')) ? 'selected' : '' }}>Construction Worker</option>
                                            <option value="farmer_fisherman" {{ (!is_null($informant) && (old('occupation') == 'farmer_fisherman' || $informant->occupation == 'farmer_fisherman')) ? 'selected' : '' }}>Farmer/Fisherman</option>
                                            <option value="entrepreneur" {{ (!is_null($informant) && (old('occupation') == 'entrepreneur' || $informant->occupation == 'entrepreneur')) ? 'selected' : '' }}>Entrepreneur</option>
                                            <option value="driver" {{ (!is_null($informant) && (old('occupation') == 'driver' || $informant->occupation == 'driver')) ? 'selected' : '' }}>Driver</option>
                                            <option value="tour_guide" {{ (!is_null($informant) && (old('occupation') == 'tour_guide' || $informant->occupation == 'tour_guide')) ? 'selected' : '' }}>Tour Guide</option>
                                            <option value="graphic_designer" {{ (!is_null($informant) && (old('occupation') == 'graphic_designer' || $informant->occupation == 'graphic_designer')) ? 'selected' : '' }}>Graphic Designer</option>
                                            <option value="it_software_developer" {{ (!is_null($informant) && (old('occupation') == 'it_software_developer' || $informant->occupation == 'it_software_developer')) ? 'selected' : '' }}>IT/Software Developer</option>
                                            <option value="dentist" {{ (!is_null($informant) && (old('occupation') == 'dentist' || $informant->occupation == 'dentist')) ? 'selected' : '' }}>Dentist</option>
                                            <option value="architect" {{ (!is_null($informant) && (old('occupation') == 'architect' || $informant->occupation == 'architect')) ? 'selected' : '' }}>Architect</option>
                                            <option value="real_estate_agent" {{ (!is_null($informant) && (old('occupation') == 'real_estate_agent' || $informant->occupation == 'real_estate_agent')) ? 'selected' : '' }}>Real Estate Agent</option>
                                            <!-- Add other occupation options here -->
                                            <option value="other" {{ old('occupation') == 'other' ? 'selected' : '' }}>Other (Specify Below)</option>
                                        </select>
                                            <!-- Input field for "Other" option -->
                                            <input type="text" id="otherOccupation" name="other_occupation" placeholder="Specify Occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded" style="display: none;" 
                                            value="{{ old('otherOccupation') ?? ($informant->occupation ?? '') }}">
                                        @error('occupation')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror

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
                                    </div>
                                </div>
        
                                <div class="w-full flex flex-col space-y-1">
                                    <label class="text-xs ">ADDRESS</label>
                                    <input type="text" name="address" placeholder="Address" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                    value="{{ old('address') ?? ($informant->address ?? '') }}">
                                    @error('address')
                                        <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="flex items-center space-x-4 py-1">
                                    <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" 
                                    href="{{ route('service.deceased', $serviceId) }}"
                                    >Back</a>
                                    <a class="nav-button text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer" data-next="contact-info">Next</a>
                                </div>
                            </div>  
                            
                            <div class="form-section flex flex-col space-y-4" id="contact-info" style="display: none;">
                                <div class="w-full flex space-x-4 items-center">
                                
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">TELEPHONE NUMBER</label>
                                        <input type="number" name="telePhoneNo" placeholder="Telephone number" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('telePhoneNo') ?? ($informant->telePhoneNo ?? '') }}">
                                        @error('telePhoneNo')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">CELLPHONE NUMBER</label>
                                        <input type="number" name="cellPhoneNo" placeholder="Cellphone Number" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('cellPhoneNo') ?? ($informant->cellPhoneNo ?? '') }}">
                                        @error('cellPhoneNo')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="w-full flex flex-col space-y-1">
                                    <label class="text-xs ">RELATIONSHIP TO THE DECEASED</label>
                                    <select name="relationshipToTheDeceased" class="w-full text-sm bg-inherit border border-gray-300 rounded " >
                                        <option value="father" {{ (!is_null($informant) && (old('relationshipToTheDeceased') == 'father' || $informant->relationshipToTheDeceased == 'father')) ? 'selected' : '' }}>Father</option>
                                        <option value="mother" {{ (!is_null($informant) && (old('relationshipToTheDeceased') == 'mother' || $informant->relationshipToTheDeceased == 'mother')) ? 'selected' : '' }}>Mother</option>
                                        <option value="sibling" {{ (!is_null($informant) && (old('relationshipToTheDeceased') == 'sibling' || $informant->relationshipToTheDeceased == 'sibling')) ? 'selected' : '' }}>Sibling</option>
                                    </select>
                                    @error('relationshipToTheDeceased')
                                        <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                    @enderror
                                </div> 

                                <div class="flex items-center space-x-3 py-1">
                                    <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" data-back="personal-info">Back</a>
                                    <button type="submit" class=" text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer">Next</button>
                                </div>
                            </div>

                            <script>
                                const formSections = document.querySelectorAll(".form-section");
                                const navButtons = document.querySelectorAll(".nav-button");
                            
                                function hideAllSections() {
                                    formSections.forEach(section => {
                                        section.style.display = "none";
                                    });
                                }
                            
                                navButtons.forEach(button => {
                                    button.addEventListener("click", () => {
                                        const nextSectionId = button.getAttribute("data-next");
                                        const backSectionId = button.getAttribute("data-back");
                            
                                        if (nextSectionId) {
                                            hideAllSections();
                                            document.getElementById(nextSectionId).style.display = "block";
                                        } else if (backSectionId) {
                                            hideAllSections();
                                            document.getElementById(backSectionId).style.display = "block";
                                        }
                                    });
                                });
                            </script>
      
                            
                        </div>
    
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>