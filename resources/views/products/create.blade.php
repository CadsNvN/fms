<x-app-layout>
    <div class="flex w-full justify-center items-start py-6">
        <div class="mx-auto w-1/2">
            <div class="border-b-2 border-gray-300 p-2">
                <h1 class="text-xl text-blue-500 font-bold">ADD NEW PRODUCT</h1>
            </div>
            <form method="POST" enctype="multipart/form-data" action="/product/store" class="flex flex-col w-full p-2">
                @csrf
                <div class="flex flex-col space-y-2 mt-3">
                    <label for="name">NAME</label>
                    <input id="name" name="name" type="text" class="rounded border border-gray-300"/>
                    @error('name')
                        <p class="text-red-500 text-xs">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="flex flex-col space-y-2 mt-3">
                    <label for="description">DESCRIPTION</label>
                    <input id="description" name="description" type="text" class="rounded border border-gray-300"/>
                    @error('description')
                        <p class="text-red-500 text-xs">{{$message}}</p>
                    @enderror
                </div>
    
                <div class="flex space-x-4 mt-3">
                    <div class="flex flex-col space-y-2">
                        <label for="price">PRICE</label>
                        <input id="price" name="price" type="number" class="rounded border border-gray-300"/>
                        @error('price')
                            <p class="text-red-500 text-xs">{{$message}}</p>
                        @enderror
                    </div>
        
                    <div class="flex flex-col space-y-2">
                        <label for="stock">STOCK</label>
                        <input id="stock" name="stock" type="number" class="rounded border border-gray-300"/>
                        @error('stock')
                            <p class="text-red-500 text-xs">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="image">PRODUCT IMAGE</label>
                        <input type="file" name="image" id="image" class="rounded border border-gray-300">
                        @error('image')
                            <p class="text-red-500 text-xs">{{$message}}</p>
                        @enderror
                    </div>
                </div>
    
                <div class="flex flex-col space-y-2 mt-3">
                    <label for="category_id">CATEGORY</label>
                    <select id="category_id" name="category_id" class="rounded border border-gray-300">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
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