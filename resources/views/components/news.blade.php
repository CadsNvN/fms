
<div class="p-4 md:w-1/3">
  <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
    <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/Torres_Escaro2.jpg')}}" alt="blog">
    <div class="p-6">
      <h2 class="tracking-widest text-lg title-font font-medium text-black mb-1">{{$announcement->title}}</h2>
      <h1 class="title-font text-sm font-medium text-black mb-3">{{$announcement->date}}</h1>
      <p class="leading-relaxed mb-3 text-black">{{$announcement->description}}</p>
      <div class="flex items-center flex-wrap">
        <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More
          <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="M12 5l7 7-7 7"></path>
          </svg>
        </a>
        
      </div>
    </div>
  </div>
</div>
