<x-app-layout>
    <section>
        <div class="mx-auto max-w-[1300px] px-4">
            <div class="w-full flex flex-col py-4">
                <div class="mb-4">
                    <p class="text-lg font-medium">Please provide the information of the Deceased</p>
                </div>
                <form action="">
                    <div class="flex flex-col space-y-5">
                        <div class="w-full flex space-x-4 items-center">
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">FIRST NAME</label>
                                <input type="text" name="firstName" placeholder="First name" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">MIDDLE NAME</label>
                                <input type="text" name="middleName" placeholder="Middle name" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">LAST NAME</label>
                                <input type="text" name="lastName" placeholder="Last name" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
                        </div>
    
                        <div class="w-full flex space-x-4 items-center">
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">DATE OF BIRTH</label>
                                <input type="date" name="dob" placeholder="Date of Birth" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">AGE</label>
                                <input type="text" name="age" placeholder="Age" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">HEIGHT</label>
                                <input type="text" name="height" placeholder="Height" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">WEIGHT</label>
                                <input type="text" name="weight" placeholder="Weight" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
                        </div>

                        <div class="w-full flex flex-col space-y-1">
                            <label class="text-xs ">RESIDENCE</label>
                            <input type="text" name="adddress" placeholder="Residence" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                        </div>

                        <div class="w-full flex space-x-4 items-center">
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">OCCUPATION</label>
                                <input type="TEXT" name="dob" placeholder="Occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">CITIZENSHIP</label>
                                <input type="text" name="age" placeholder="Citizenship" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">RELIGION</label>
                                <input type="text" name="height" placeholder="Religion" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">CIVIL STATUS</label>
                                <select name="" id="" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                    <option value="">Married</option>
                                    <option value="">Single</option>
                                    <option value="">Separated</option>
                                    <option value="">Widowed</option>
                                </select>
                            </div>

                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">SEX</label>
                                <select name="" id="" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="w-full flex space-x-4 items-center">
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">NAME OF FATHER</label>
                                <input type="text" name="nameOfFather" placeholder="Name of father" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">MAIDEN NAME OF MOTHER</label>
                                <input type="text" name="maidenNameOfMother" placeholder="Maiden name of mother" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
                        </div>

                        <div class="w-full flex space-x-4 items-center">
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">CAUSE OF DEATH</label>
                                <input type="text" name="nameOfFather" placeholder="Cause of death" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>

                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">PLACE OF DEATH</label>
                                <input type="text" name="nameOfFather" placeholder="Name of father" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
    
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">TIME OF DEATH</label>
                                <input type="time" name="maidenNameOfMother" placeholder="Maiden name of mother" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>

                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">DATE OF DEATH</label>
                                <input type="date" name="maidenNameOfMother" placeholder="Maiden name of mother" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
                        </div>

                        <div class="w-full flex flex-col space-y-1">
                            <label class="text-xs ">NAME AND ADDRESS OF CEMETERY</label>
                            <input type="text" name="nameOfFather" placeholder="Name and address of cemetery" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                        </div>

                        <div class="w-full flex flex-col space-y-1">
                            <label class="text-xs ">PLACE OF VIEWING</label>
                            <input type="text" name="nameOfFather" placeholder="Name and address of cemetery" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                        </div>

                        <div class="w-full flex space-x-4 items-center"> 
                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">DATE OF INTERMENT</label>
                                <input type="date" name="maidenNameOfMother" placeholder="Maiden name of mother" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>

                            <div class="w-full flex flex-col space-y-1">
                                <label class="text-xs ">TIME OF INTERMENT</label>
                                <input type="time" name="maidenNameOfMother" placeholder="Maiden name of mother" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                            </div>
                        </div>

                    </div>

                    <div class="flex items-center justify-end mt-5">
                        <x-primary-button>
                            <a href="{{  }}">
                                NEXT
                            </a>
                        </x-primary-button>
                    </div>
                
                </form>
            </div>
        </div>
    </section>
</x-app-layout>