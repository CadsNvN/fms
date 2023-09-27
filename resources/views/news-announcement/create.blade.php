<x-app-layout>
  <div class="flex w-full justify-center items-start py-6">
    <div class="max-auto w-1/2">
      <div class="border-b-2 border-gray-300 p-2">
        <h1 class="text-xl text-blue-500 font-bold">ADD NEW NEWS AND ANNOUNCEMENT</h1>
      </div>
      <form method="POST" enctype="multipart/form-data" action="/news-announcement/store" class="flex flex-col w-full p-2">
        @csrf

        {{-- TITLE --}}
        <div class="flex flex-col space-y-2 mt-3">
          <label for="name">TITLE</label>
          <input id="title" name="title" type="text" placeholder="Title" class="rounded border border-gray-300"/>
          @error('title')
              <p class="text-red-500 text-xs">{{$message}}</p>
          @enderror
        </div>

        {{-- DESCRIPTION --}}
        <div class="flex flex-col space-y-2 mt-3">
          <label for="description">DESCRIPTION</label>
          <input id="description" name="description" placeholder="Description" type="text" class="rounded border border-gray-300"/>
          @error('description')
              <p class="text-red-500 text-xs">{{$message}}</p>
          @enderror
        </div>

        {{-- DATE --}}
        <div class="flex flex-col space-y-4 mt-3">
          <label for="image">DATE</label>
          <input type="date" name="date" id="date" class="text-sm rounded border border-gray-300 w-full">
          @error('date')
              <p class="text-red-500 text-xs">{{$message}}</p>
          @enderror
        </div>

        {{-- IMAGE --}}
        <div class="flex flex-col space-y-4 mt-3">
          <label for="image">NEWS / ANNOUNCEMENT IMAGE</label>
          <input type="file" name="images[]" id="images" class="text-sm rounded border border-gray-300 w-full" multiple>
          @error('images')
              <p class="text-red-500 text-xs">{{$message}}</p>
          @enderror
        </div>
        
        <div class="mt-6">
          <button type="submit" class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-700">Save</button>
        </div>

      </form>
    </div>
  </div>
</x-app-layout>