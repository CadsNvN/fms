<x-app-layout>
  <section>
      <div class="mx-auto max-w-[1300px] px-4">
          <div class="w-full flex flex-col py-4">
              <div class="mb-4">
                  <p class="text-lg font-medium">Please provide the information of the Informant</p>
              </div>
              <form action="">
                  <div class="flex flex-col space-y-5">
                      <div class="w-full flex space-x-4 items-center">
                          <div class="w-full flex flex-col space-y-1">
                              <label class="text-xs ">NAME OF INFORMANT</label>
                              <input type="text" name="informant" placeholder="Name of Informant" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                          </div>
  
                          <div class="w-full flex flex-col space-y-1">
                              <label class="text-xs ">SIGNATURE</label>
                              <input type="text" name="Signature" placeholder="Signature" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                          </div>
  
                          <div class="w-full flex flex-col space-y-1">
                            <label class="text-xs ">AGE</label>
                            <input type="text" name="age" placeholder="Age" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                          </div>

                          <div class="w-full flex flex-col space-y-1">
                            <label class="text-xs ">OCCUPATION</label>
                            <input type="text" name="Occupation" placeholder="Occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                          </div>
                      </div>
  
                      <div class="w-full flex space-x-4 items-center">
                          <div class="w-full flex flex-col space-y-1">
                              <label class="text-xs ">ADDRESS</label>
                              <input type="text" name="address" placeholder="Address" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                          </div>

                          <div class="w-full flex flex-col space-y-1">
                            <label class="text-xs ">TEL. NO.</label>
                            <input type="text" name="telno" placeholder="Telephone number" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                          </div>

                          <div class="w-full flex flex-col space-y-1">
                            <label class="text-xs ">CELLPHONE NO.</label>
                            <input type="TEXT" name="cellphoneNo" placeholder="Cellphone Number" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                          </div>
                      </div>

                      <div class="w-full flex space-x-4 items-center">
                          
  
                          <div class="w-full flex flex-col space-y-1">
                              <label class="text-xs ">RELATIONSHIP TO THE DECEASED</label>
                              <input type="text" name="relationship-deceased" placeholder="Relation to the Deceased" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                          </div>
  
                          <div class="w-full flex flex-col space-y-1">
                              <label class="text-xs ">DATE</label>
                              <input type="date" name="date" placeholder="DATE" class="w-full text-sm bg-inherit border border-gray-300 rounded ">
                          </div>
                      </div>
                  </div>

                  <div class="flex items-center justify-end mt-5">
                    <x-primary-button>
                        SUBMIT
                    </x-primary-button>
                  </div>
              </form>
          </div>
      </div>
  </section>
</x-app-layout>