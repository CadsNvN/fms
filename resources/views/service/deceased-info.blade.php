<x-app-layout>
    <section>
        <div class="mx-auto max-w-[1300px] px-4">
            <div class="w-full flex flex-col py-4">
               
                <div class="w-full flex items-center justify-between space-x-4">
                    <div class="w-1/2 ">
                        <x-candle/>
                    </div>

                    <form action="{{ route('service.deceased.store', $serviceId) }}" method="POST" class="w-2/3 pt-16 ">
                        @csrf
                        <div class="mb-4">
                            <p class="text-2xl font-medium">DECEASED'S INFORMATION</p>
                        </div>
                        <div class="form-section flex flex-col space-y-4" id="personal-info">
                            <x-deceased-personal-info :deceased="$deceased" />
                            <div class="flex items-center space-x-4 py-1">
                                <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" 
                                    href="{{ route('service.inclusions', $serviceId) }}"
                                >Back</a>
                                <a class="nav-button text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer" data-next="parents-info">Next</a>
                            </div>
                        </div>
                    
                        <div class="form-section flex flex-col space-y-4" id="parents-info" style="display: none;">
                            <x-deceased-parents-info :deceased="$deceased" />
                            <div class="flex items-center space-x-3 py-1">
                                <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" data-back="personal-info">Back</a>
                                <a class="nav-button text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer" data-next="other-info">Next</a>
                            </div>
                        </div>

                        <div class="form-section flex flex-col space-y-4" id="other-info" style="display: none;">
                            <x-deceased-other-info :deceased="$deceased" />
                            <div class="flex items-center space-x-3 py-1">
                                <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" data-back="parents-info">Back</a>
                                <a class="nav-button text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer" data-next="interment-info">Next</a>
                            </div>
                        </div>
                    
                        <div class="form-section flex flex-col space-y-4" id="interment-info" style="display: none;">
                            <x-deceased-interment-info :deceased="$deceased" />
                            <div class="flex items-center space-x-3 py-1">
                                <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" data-back="other-info">Back</a>
                                <button type="submit" class=" text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer">Next</button>
                            </div>
                        </div>
                    </form>
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
        </div>
    </section>
</x-app-layout>