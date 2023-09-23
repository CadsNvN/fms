<x-app-layout>
    <section>
        <div class="mx-auto max-w-[1300px] px-4">
            <div class="w-full flex flex-col py-4">
                <div class="w-full flex items-start justify-between space-x-4">
                    <div class="w-1/2">
                        <x-candle />
                    </div>
                    
                    <form action="{{ route('service.informant.store', $serviceId) }}" method="POST" class="w-1/2 mt-32">
                        @csrf
                        <div class="flex flex-col space-y-5">
                            <div class="">
                                <p class="text-2xl font-medium">INFORMANT'S INFORMATION</p>
                            </div>

                            <div class="form-section flex flex-col space-y-4" id="personal-info">
                                
                                <div class="w-full flex space-x-4 items-start">
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">FIRST NAME</label>
                                        <input type="text" name="firstName" placeholder="First name" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                        @error('firstName')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
            
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">MIDDLE NAME</label>
                                        <input type="text" name="middleName" placeholder="Middle name" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                        @error('middleName')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">LAST NAME</label>
                                        <input type="text" name="lastName" placeholder="Last name" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                        @error('lastName')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                </div>
        
                                <div class="w-full flex space-x-4 items-center">
                                    
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">AGE</label>
                                        <input type="text" name="age" placeholder="Age" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                        @error('age')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">OCCUPATION</label>
                                        <input type="text" name="occupation" placeholder="Occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                        @error('occupation')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="w-full flex flex-col space-y-1">
                                    <label class="text-xs ">ADDRESS</label>
                                    <input type="text" name="address" placeholder="Address" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                    @error('address')
                                        <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="flex items-center justify-start py-1">
                                    <a class="nav-button text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer" data-next="contact-info">Next</a>
                                </div>
                            </div>  
                            
                            <div class="form-section flex flex-col space-y-4" id="contact-info" style="display: none;">
                                <div class="w-full flex space-x-4 items-center">
                                
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">TELEPHONE NUMBER</label>
                                        <input type="text" name="telePhoneNo" placeholder="Telephone number" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                        @error('telePhoneNo')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">CELLPHONE NUMBER</label>
                                        <input type="TEXT" name="cellPhoneNo" placeholder="Cellphone Number" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                        @error('cellPhoneNo')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="w-full flex flex-col space-y-1">
                                    <label class="text-xs ">RELATIONSHIP TO THE DECEASED</label>
                                    <input type="text" name="relationshipToTheDeceased" placeholder="Relation to the Deceased" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                    @error('relationshipToTheDeceased')
                                        <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                    @enderror
                                </div> 

                                <div class="flex items-center space-x-3 py-1">
                                    <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" data-back="personal-info">Back</a>
                                    <button type="submit" class=" text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer">Save and Proceed</button>
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