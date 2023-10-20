<x-app-layout>
  <section class="py-4">
      <div class="flex flex-col mx-auto max-w-[1240px]">
          <div class="flex flex-row justify-between mb-3">
              <div class="py-2 border-b border-gray-300">
                  <h1 class="text-xl font-bold">Hearse</h1>
              </div>
              <div>
                  <button class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-900 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                      <a href="{{ route('hearse.create') }}">
                          Create Hearse
                      </a>
                  </button>
              </div>
          </div>
  
          <div>
              <table class="table-auto w-full border-collapse">
                  <thead>
                      <tr class="text-left bg-gray-200">
                          <th class="px-4 py-2">Image</th>
                          <th class="px-4 py-2">Name</th>
                          <th class="px-4 py-2">Description</th>
                          <th class="px-4 py-2">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($hearses as $hearse)
                          <tr class="border-t border-gray-300">
                              <td class="px-4 py-2">
                                <img src="{{ $hearse->coverPhoto ? asset('storage/' . $hearse->coverPhoto) : "" }}" alt="hearse Image" class="w-16 h-16">
                              </td>
                              <td class="px-4 py-2 text-sm">{{$hearse->name}}</td>
                              <td class="px-4 py-2 text-sm">{{substr($hearse->description, 0, 3)}} {{strlen($hearse->description) > 5 ? "..." : ""}}</td>
                             
                              
                              <td class="px-4 py-2 text-sm flex items-center space-x-2">
                                  <a href="/casket/{{$hearse->id}}/edit" class="rounded py-1 px-2 cursor-pointer">
                                      <i class='bx bxs-edit text-xl text-blue-600' ></i>
                                  </a>                                           
                                  <form action="{{ route('casket.destroy', $hearse->id) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="rounded p-2 cursor-pointer">
                                          <i class='bx bx-trash text-xl text-red-600'></i>
                                      </button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
              <div class="mt-3 pt-2 border-t border-gray-200">
                  {{ $hearses->links() }}
              </div>
          </div>
      </div>
  </section>
</x-app-layout>
  
