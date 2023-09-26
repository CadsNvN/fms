<x-app-layout>
 <section class="py-4">
  <div class="flex flex-col mx-auto max-w-[1300px] px-4">
    <div class="flex flex-row justify-between mb-3">
      <div class="py-2 border-b border-gray-300">
        <h1 class="text-xl font-bold">News and Announcements</h1>
      </div>
      <div>
        <button>
          <a href="{{route('news-announcement.create')}}" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-900 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
              Create News and Announcements
          </a>
        </button>
      </div>
    </div>

    <div>
      <table class="table-auto w-full border-collapse">
        <thead>
          <tr class="text-left bg-gray-200">
            <th class="px-4 py-2">Title</th>
            <th class="px-4 py-2">Description</th>
            <th class="px-4 py-2">Date</th>
            <th class="px-4 py-2">Image</th>
            <th class="px-4 py-2">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($announcements as $announcement)
            <tr class="border-t border-gray-300">
                <td class="px-4 py-2 text-sm">{{ $announcement->title }}</td>
                <td class="px-4 py-2 text-sm">{{ $announcement->description }}</td>
                <td class="px-4 py-2 text-sm">{{ $announcement->date }}</td>
                <td class="px-4 py-2 text-sm">
                  @foreach ($announcement->images as $image)
                    <img src="{{ $image->path ? asset('storage/' . $image->path) : "" }}" alt="news-announcement Image" class="w-16 h-16">
                  @endforeach
                </td>
                <td class="px-4 py-2 text-sm flex items-center space-x-2">
                    <a href="/news-announcement/{{$announcement->id}}/edit" class="rounded py-1 px-2 cursor-pointer">
                        <i class='bx bxs-edit text-xl text-blue-600' ></i>
                    </a>
                    <form action="{{route('news-announcement.destroy', $announcement->id)}}" method="post">
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
    </div>
  </div>

  
 </section>
</x-app-layout>