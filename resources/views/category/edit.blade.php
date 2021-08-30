<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Categories') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form action="{{ route('category.update', $category) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <h1 class="text-2xl">Edit kategori</h1>
            </div>
            <div>
              <x-label for="name" :value="__('Nama Produk')" />
              <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $category->name)" :error="$errors->first('name')" required autofocus />
            </div>

            <button type="submit" class="w-full mt-4 rounded px-4 py-2 bg-blue-500 text-white hover:bg-blue-600">Edit Kategori</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>