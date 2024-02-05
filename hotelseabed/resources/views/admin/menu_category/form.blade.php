<x-app-layout>

    <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
        

        <form action="{{  route('menu-category.store') }}" method="post"
            class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

            <div class="px-4 sm:px-8">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Update Categories</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Update the Category details.</p>
            </div>

            @csrf

            <div class="px-4 py-6 sm:p-8">
                <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <div class="mt-2">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="mt-2">
                    <input id="name" name="name" rows="3"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                    </div>
                    <p class="mt-3 text-sm leading-6 text-gray-600">Name of the category.</p>
                    @error('name')
                        <p class="mt-3 text-sm leading-6 text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-full">
                    <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug</label>
                    <div class="mt-2">
                    <input id="slug" name="slug" type="slug" rows="3" {{--value="{{ old('slug', $menu_category->slug) }}" --}}
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                    </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Slug of the category.</p>
                        @error('slug')
                            <p class="mt-3 text-sm leading-6 text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
        </form>
    </div>
</div>
    
</x-app-layout>


{{-- <x-app-layout>
    <div class="container mx-auto mt-1">
        <div class="space-y-10 divide-y divide-gray-900/10">

            <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
              <div class="px-4 sm:px-5">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Update User</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Update the user's details.</p>
              </div>
        
              <form method="post"
              @if ($menu_category->id)
              action="{{ route('menu_category.update', $menu_category->id)}}" 
              @else
              action="{{ route('menu-category.create') }}"
              @endif
              class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                @csrf
                @if($menu_category->id)
                @method('PUT')
                @endif

                <div class="px-4 py-6 sm:p-8">
                  <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                      <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Website</label>
                      <div class="mt-2">
                      </div>
                    </div>
        
                    <div class="col-span-full">
                      <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                      <div class="mt-2">
                        <input id="name" name="name" rows="3"
                        value="{{ old('name', $menu_category->name) }}"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                      </div>
                      <p class="mt-3 text-sm leading-6 text-gray-600">Name of the user.</p>
                      @error('name')
                            <p class="mt-3 text-sm leading-6 text-red-600">{{ $message }}</p>
                      @enderror
                    </div>

                    {{-- <div class="col-span-full">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                          <input id="email" name="email" type="email" rows="3"
                          value="{{ old('email', $user->email) }}"
                          class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Email of the user.</p>
                        @error('email')
                            <p class="mt-3 text-sm leading-6 text-red-600">{{ $message }}</p>
                      @enderror
                      </div> --}}

               {{-- </div>
                <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                  <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                  <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</x-app-layout> --}}