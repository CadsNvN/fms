<x-welcome-layout>
@include('partials._hero')

{{-- NEW AND UPDATE --}}
<section class="text-gray-400 bg-white body-font">
  <div class="mx-auto max-w-[1240px]" data-aos="fade-up">
    <x-sub-header-text>
      <h1 class="text-4xl font-bold uppercase mb-4">
        News & Update
      </h1>
      <a href="/" class="hover:underline text-l">See more</a>
    </x-sub-header-text>
  
    <div class="container px-5 py-10 mx-auto">
      <div class="flex flex-wrap -m-4">
        @foreach($announcements as $announcement)
          <x-news :announcement="$announcement"/>
        @endforeach
      </div>
    </div>
  </div>
</section>
{{-- END OF NEWS AND UPDATE --}}

{{-- PRODUCTS --}}
<section class="text-gray-600 body-font bg-gray-200 py-6">
  <div class="mx-auto max-w-[1240px]" data-aos="fade-up">
    <x-sub-header-text>
      <h1 class="text-4xl font-bold uppercase mb-4">
        Products
      </h1>
      <a href="{{route('product.browse')}}" class="hover:underline text-l">See more Products</a>
    </x-sub-header-text>

    <div class="container w-full px-5 py-20 mx-auto">
      <div class="flex flex-wrap w-full m-4">
        @foreach ($products as $product)
          <x-product-card :product="$product" />
        @endforeach
      </div>
    </div>
  </div>
  
</section>
{{-- END OF PRODUCTS --}}

{{-- CONTACT US --}}
<section class="text-gray-600 body-font bg-gray-100 relative">
  <div class="mx-auto max-w-[1240px]" data-aos="fade-up">
    <div class="px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?q=Torres-Escaro Funeral Service 110 Bayanan Rd, Bacoor, 4102 Cavite&t=&z=17&ie=UTF8&iwloc=&output=embed" ></iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-black tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1 text-black">110 Bayanan Rd, Bacoor, 4102 Cavite</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-black tracking-widest text-xs">EMAIL</h2>
            <a class="text-indigo-800 leading-relaxed">torresescarofuneral@gmail.com</a>
            <h2 class="title-font font-semibold text-black tracking-widest text-xs mt-4">MOBILE</h2>
            <p class="leading-relaxed text-black">0921-421-4743 / 0919-075-5427 / <br> LANDLINE: (046) 502-6635</p>
          </div>
        </div>
      </div>

      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full rounded-md p-5 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5 text-sm text-gray-600">We value your input! <br> At Toress Escaro Funeral Service, we are committed to providing you with the best possible experience. </p>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
          <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
        <p class="text-sm text-gray-500 mt-3">Your feedback is essential in helping us achieve that goal. Whether you've had a great experience or encountered any challenges, we want to hear from you.</p>
      </div>
    </div>
  </div>
</section>
{{-- END OF CONTACT US --}}

{{-- TESTIMONIAL --}}
<section class="text-gray-600 body-font pt-10">
  <div class="mx-auto max-w-[1240px]" data-aos="fade-up">
    <div class="z-10 text-center text-black">
      <h1 class="text-4xl font-bold uppercase mb-4">
        Testimonial
      </h1>
      <a href="/" class="hover:underline text-l">See more</a>
    </div>
  
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
        <x-testimonial-card/>
        <x-testimonial-card/>
        <x-testimonial-card/>
      </div>
    </div>
  </div>
</section>
{{-- END OF TESTIMONIAL --}}
</x-welcome-layout>