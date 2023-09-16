
<section class="relative h-96 flex flex-col justify-center align-center text-center space-y-8 mb-10">
  <div class="w-full h-full bg-hero-image bg-no-repeat bg-center flex items-center justify-center" >
    <div class="rounded-lg p-8 bg-white bg-opacity-50 ">
        <h1 class="text-5xl font-bold uppercase text-white">
          <span class="text-blue-800">Torres Escaro Funeral Service</span>
        </h1>
        <p class="text-4xl text-blue-800 font-semibold my-4">
          110 Bayanan Rd, Bacoor, 4102 Cavite
        </p>
        {{-- <p>110 Bayanan Rd, Bacoor, 4102 Cavite</p> --}}
        @guest
          <div class="pt-6">
            <a href="register.html" class="inline-block border-2 border-white-800 
            text-blue-800 font-semibold py-2 px-4 rounded-md uppercase mt-2 bg-white">
              Sign Up to Access Full Services
            </a>
          </div>
        @endguest

    </div>
  </div>

</section>

{{-- style="background-image: url('images/Torres_Escaro1.jpg')" --}}